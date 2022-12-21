<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Achievement::truncate();

        $achievements = [
            [
                'name' => 'Laracasts Loyalty',
                'description' => 'Awarded yearly, based upon the initial Laracasts sign up date.',
                'icon' => 'laracasts-loyalty.svg',
            ],
            [
                'name' => 'Start Your Engines',
                'description' => 'Earned once you have completed your first Laracasts lesson.',
                'icon' => 'start-your-engines.svg',
            ],
            [
                'name' => 'First Thousand',
                'description' => 'Earned once you have earned your first 1000 experience points.',
                'icon' => 'first-thousand.svg',
            ],
            [
                'name' => 'School In Session',
                'description' => 'Earned when at least one Laracasts series has been fully completed.',
                'icon' => 'school-in-session.svg',
            ],
            [
                'name' => 'Welcome To The Community',
                'description' => 'Earned after your first post on the Laracasts forum.',
                'icon' => 'welcome-to-the-community.svg',
            ],
            [
                'name' => 'Full Time Learner',
                'description' => 'Earned once 100 Laracasts lessons have been completed.',
                'icon' => 'full-time-learner.svg',
            ],
            [
                'name' => 'Pay It Forward',
                'description' => 'Earned once you receive your first "Best Reply" award on the Laracasts forum.',
                'icon' => 'pay-it-forward.svg',
            ],
            [
                'name' => 'Subscriber',
                'description' => 'Earned if you are a paying Laracasts subscriber.',
                'icon' => 'subscriber.svg',
            ],
            [
                'name' => 'Lifer',
                'description' => 'Earned if you have a lifetime subscription to Laracasts.',
                'icon' => 'lifer.svg',
            ],
            [
                'name' => 'Laracasts Evangelist',
                'description' => 'Earned if you share a link to Laracasts on social media. Please email support@laracasts.com with your username and post URL to be awarded this badge.',
                'icon' => 'laracasts-evangelist.svg',
            ],
            [
                'name' => 'Chatty Cathy',
                'description' => 'Earned once you have achieved 500 forum replies.',
                'icon' => 'chatty-cathy.svg',
            ],
            [
                'name' => 'Laracasts Veteran',
                'description' => 'Earned once your experience points passes 100,000.',
                'icon' => 'laracasts-veteran.svg',
            ],
            [
                'name' => 'Ten Thousand Strong',
                'description' => 'Earned once your experience points hits 10,000.',
                'icon' => 'ten-thousand-strong.svg',
            ],
            [
                'name' => 'Laravel Architect',
                'description' => 'Earned once you have completed the Laravel Path.',
                'icon' => 'laravel-architect.svg',
            ],
            [
                'name' => 'Community Pillar',
                'description' => 'Earned once your experience points ranks in the top 10 of all Laracasts users.',
                'icon' => 'community-pillar.svg',
            ],
            [
                'name' => 'Laracasts Master',
                'description' => 'Earned once 1000 Laracasts lessons have been completed.',
                'icon' => 'laracasts-master.svg',
            ],
            [
                'name' => 'Laracasts Tutor',
                'description' => 'Earned once your "Best Reply" award count is 100 or more.',
                'icon' => 'laracasts-tutor.svg',
            ],
            [
                'name' => 'Laracasts Sensei',
                'description' => 'Earned once your experience points passes 1 million.',
                'icon' => 'laracasts-sensei.svg',
            ],
            [
                'name' => 'Top 50',
                'description' => 'Earned once your experience points ranks in the top 50 of all Laracasts users.',
                'icon' => 'top50.svg',
            ],
        ];

        foreach ($achievements as $achievement) {
            Achievement::create($achievement);
        }
    }
}
