<?php

namespace App\Console\Commands;

use App\Support\PublicUpload;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SyncTeamImagesCommand extends Command
{
    protected $signature = 'team:sync-images';

    protected $description = 'Normalize team image DB paths and copy public/images/team into the live web root';

    public function handle(): int
    {
        if (Schema::hasTable('team_members') && Schema::hasColumn('team_members', 'image')) {
            $legacy = DB::table('team_members')->where('image', 'like', 'team/%')->count();

            DB::table('team_members')
                ->where('image', 'like', 'team/%')
                ->update([
                    'image' => DB::raw("CONCAT('images/', image)"),
                    'updated_at' => now(),
                ]);

            DB::table('team_members')
                ->where('image', 'like', 'storage/team/%')
                ->update([
                    'image' => DB::raw("REPLACE(image, 'storage/team/', 'images/team/')"),
                    'updated_at' => now(),
                ]);

            $this->info("Normalized {$legacy} legacy team image path(s).");
        }

        $copiedImages = PublicUpload::syncDirectory('images/team');
        $copiedCvs = PublicUpload::syncDirectory('cv');
        $this->info("Copied {$copiedImages} team image file(s) into web-visible upload roots.");
        $this->info("Copied {$copiedCvs} CV file(s) into web-visible upload roots.");

        if (! filled(env('PUBLIC_UPLOAD_ROOT')) && ! filled($_SERVER['DOCUMENT_ROOT'] ?? null)) {
            $this->warn('Tip: on cPanel/Bluehost set PUBLIC_UPLOAD_ROOT=/home/xxdgbomy/public_html in .env');
        }

        return self::SUCCESS;
    }
}
