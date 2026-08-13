<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            ['name' => 'ASA', 'logo' => 'images/asa-logo.png', 'sort_order' => 10],
            ['name' => 'Jomofa', 'logo' => 'images/jomofa_logo.jpg', 'sort_order' => 20],
            ['name' => 'Lawson', 'logo' => 'images/lawsonlogo.png', 'sort_order' => 30],
            ['name' => 'Next SMS', 'logo' => 'images/next_sms_logo.png', 'sort_order' => 40],
            ['name' => 'Primeland', 'logo' => 'images/primeland_logo.png', 'sort_order' => 50],
            ['name' => 'Sams Hostel', 'logo' => 'images/samshostel_logo.png', 'sort_order' => 60],
            ['name' => 'TZ Pure Nature', 'logo' => 'images/tz_pure_nature_logo.webp', 'sort_order' => 70],
        ];

        foreach ($partners as $partner) {
            Partner::updateOrCreate(
                ['name' => $partner['name']],
                [
                    'logo' => $partner['logo'],
                    'sort_order' => $partner['sort_order'],
                    'is_active' => true,
                ]
            );
        }
    }
}
