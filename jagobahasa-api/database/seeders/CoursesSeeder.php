<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Courses::create([
            'tittle' => 'Test User',
            'description' => 'Test',
            'price' => 2000,
            'level' => 'admin',
            'program' => 'test',
            'thumbnail' => 'test',
            'instructor_id' => '1',
            'status' => '1',
            'id_users' => '1',
        ]);
    }
}
