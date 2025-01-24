<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::create([
        //     'name'    => 'Ridi',
        //     'email'    => 'ridi@gmail.com',
        //     'password'    => bcrypt('asoy1234'),
        //     'role'    => '1',
        //     'status'    => '1'
        // ]);
        $this->call(CoursesSeeder::class);
    }
}
