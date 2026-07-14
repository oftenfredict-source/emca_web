<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('team_members') || ! Schema::hasColumn('team_members', 'image')) {
            return;
        }

        // Normalize legacy storage paths: team/abc.jpg -> images/team/abc.jpg
        DB::table('team_members')
            ->where('image', 'like', 'team/%')
            ->update([
                'image' => DB::raw("CONCAT('images/', image)"),
                'updated_at' => now(),
            ]);

        // Also normalize accidental storage/ prefixes if present.
        DB::table('team_members')
            ->where('image', 'like', 'storage/team/%')
            ->update([
                'image' => DB::raw("REPLACE(image, 'storage/team/', 'images/team/')"),
                'updated_at' => now(),
            ]);
    }

    public function down(): void
    {
        if (! Schema::hasTable('team_members') || ! Schema::hasColumn('team_members', 'image')) {
            return;
        }

        DB::table('team_members')
            ->where('image', 'like', 'images/team/%')
            ->update([
                'image' => DB::raw("REPLACE(image, 'images/team/', 'team/')"),
                'updated_at' => now(),
            ]);
    }
};
