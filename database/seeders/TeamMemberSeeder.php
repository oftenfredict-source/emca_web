<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = config('team.members');
        $order = 1;

        foreach ($members as $slug => $member) {
            TeamMember::firstOrCreate(
                ['slug' => $slug],
                [
                    'name' => $member['name'],
                    'role' => $member['role'],
                    'image' => $member['image'],
                    'email' => $member['email'],
                    'mobile' => $member['mobile'],
                    'bio' => $member['bio'],
                    'social' => $member['social'],
                    'cv_path' => $member['cv'],
                    'style' => $member['style'],
                    'delay' => $member['delay'],
                    'is_active' => true,
                    'sort_order' => $order,
                ]
            );

            $order++;
        }
    }
}
