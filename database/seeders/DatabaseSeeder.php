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
        \App\Models\User::factory(50)->create();
        \App\Models\Profile::factory(50)->create();
        \App\Models\Project::factory(50)->create();

        \App\Models\Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);
        \App\Models\Role::create([
            'name' => 'Faculty',
            'slug' => 'faculty',
        ]);
        \App\Models\Role::create([
            'name' => 'Student',
            'slug' => 'student',
        ]);
    }
}
