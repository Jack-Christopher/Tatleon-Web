<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CourseSeeder::class);
        $this->call(SchoolSeeder::class);
        $this->call(CourseSchoolSeeder::class);
        $this->call(WelcomeSeeder::class);
    }
}
