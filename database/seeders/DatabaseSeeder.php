<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ChannelSeeder::class,
            ConversationSeeder::class,
            PostSeeder::class,
            TopicSeeder::class,
            SeriesSeeder::class,
            ChapterSeeder::class,
            EpisodeSeeder::class,
        ]);
    }
}
