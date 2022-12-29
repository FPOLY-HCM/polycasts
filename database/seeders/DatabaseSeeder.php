<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call([
            UserSeeder::class,
            AchievementSeeder::class,
            ChannelSeeder::class,
            DiscussionSeeder::class,
            PostSeeder::class,
            TopicSeeder::class,
            SeriesSeeder::class,
            ChapterSeeder::class,
            EpisodeSeeder::class,
        ]);
    }
}
