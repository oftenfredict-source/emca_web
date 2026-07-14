<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('posts') && Schema::hasColumn('posts', 'image')) {
            DB::table('posts')
                ->where('image', 'like', 'posts/%')
                ->update([
                    'image' => DB::raw("CONCAT('images/', image)"),
                    'updated_at' => now(),
                ]);

            DB::table('posts')
                ->where('image', 'like', 'storage/posts/%')
                ->update([
                    'image' => DB::raw("REPLACE(image, 'storage/posts/', 'images/posts/')"),
                    'updated_at' => now(),
                ]);
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('posts') && Schema::hasColumn('posts', 'image')) {
            DB::table('posts')
                ->where('image', 'like', 'images/posts/%')
                ->update([
                    'image' => DB::raw("REPLACE(image, 'images/posts/', 'posts/')"),
                    'updated_at' => now(),
                ]);
        }
    }
};
