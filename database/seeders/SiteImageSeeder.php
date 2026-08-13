<?php

namespace Database\Seeders;

use App\Services\SiteImageService;
use Illuminate\Database\Seeder;

class SiteImageSeeder extends Seeder
{
    public function run(): void
    {
        app(SiteImageService::class)->syncCatalog();
    }
}
