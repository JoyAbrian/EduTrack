<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SchoolSeeder::class,
            SubjectSeeder::class,
            TeacherSeeder::class,
            ClassesSeeder::class,
            StudentSeeder::class,
            UserSeeder::class,
        ]);
    }
}
