<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Naamani Basso',
                'role' => 'Headmaster, Bi. Alpha Memorial School',
                'content' => 'ShuleXpert has greatly improved the way we manage our school. From admissions to attendance and examinations, everything is now more organized and efficient. It\'s an excellent system that we highly recommend.',
                'rating' => 5,
                'sort_order' => 1,
            ],
            [
                'name' => 'Werney Kapinga',
                'role' => 'Head Teacher, Malecela Secondary School',
                'content' => 'ShuleXpert has made academic records simple and efficient. It\'s easy to use, secure, and improves communication between teachers, parents, and management. Highly recommended!',
                'rating' => 5,
                'sort_order' => 2,
            ],
            [
                'name' => 'Edward Manyilizu',
                'role' => 'Pastor, AICT Moshi Church',
                'content' => 'Managing church records has never been easier. WauminiLink helps us keep accurate membership information, track activities, and improve communication within our church. Highly recommended!',
                'rating' => 5,
                'sort_order' => 3,
            ],
            [
                'name' => 'Peter R',
                'role' => 'Business Owner',
                'content' => 'MauzoLink has simplified the way we manage our sales and daily business operations. Tracking products, sales records, and reports is now faster and more accurate. Thanks EmCa Technologies.',
                'rating' => 5,
                'sort_order' => 4,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(
                ['name' => $testimonial['name']],
                $testimonial + ['is_active' => true]
            );
        }
    }
}
