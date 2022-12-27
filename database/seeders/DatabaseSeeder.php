<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call([
            UserSeeder::class,
            AchievementSeeder::class,
            ChannelSeeder::class,
            ConversationSeeder::class,
            ReplySeeder::class,
            TopicSeeder::class,
            SeriesSeeder::class,
            ChapterSeeder::class,
            EpisodeSeeder::class,
        ]);
    }
}
