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
        $copiedPosts = PublicUpload::syncDirectory('images/posts');

        // Also copy any leftover files from storage/app/public/posts into public images/posts.
        $copiedFromStorage = $this->copyStoragePostsToPublic();

        $this->info("Copied {$copiedImages} team image file(s) into web-visible upload roots.");
        $this->info("Copied {$copiedCvs} CV file(s) into web-visible upload roots.");
        $this->info("Copied {$copiedPosts} blog image file(s) into web-visible upload roots.");
        $this->info("Copied {$copiedFromStorage} leftover storage blog image(s).");

        if (! filled(env('PUBLIC_UPLOAD_ROOT')) && ! filled($_SERVER['DOCUMENT_ROOT'] ?? null)) {
            $this->warn('Tip: on cPanel/Bluehost set PUBLIC_UPLOAD_ROOT=/home/xxdgbomy/public_html in .env');
        }

        return self::SUCCESS;
    }

    private function copyStoragePostsToPublic(): int
    {
        $source = storage_path('app/public/posts');
        if (! is_dir($source)) {
            return 0;
        }

        $targetRelative = 'images/posts';
        $target = public_path($targetRelative);
        if (! is_dir($target)) {
            @mkdir($target, 0755, true);
        }

        $copied = 0;
        foreach (scandir($source) ?: [] as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }

            $from = $source.DIRECTORY_SEPARATOR.$file;
            if (! is_file($from)) {
                continue;
            }

            $to = $target.DIRECTORY_SEPARATOR.$file;
            if (@copy($from, $to)) {
                @chmod($to, 0644);
                $copied++;
            }
        }

        // Push into public_html as well when configured.
        $copied += PublicUpload::syncDirectory($targetRelative);

        return $copied;
    }
}
