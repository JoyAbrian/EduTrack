<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            'Mathematics', 'English', 'Physics', 'Chemistry', 'Biology', 
            'Geography', 'History', 'Art', 'Music', 'Physical Education',
            'Computer Science', 'Economics', 'Political Science', 
            'Philosophy', 'Psychology', 'Sociology', 'Environmental Science',
            'Engineering', 'Astronomy', 'Literature', 'Statistics', 
            'Algebra', 'Geometry', 'Calculus', 'Organic Chemistry', 
            'Inorganic Chemistry', 'Molecular Biology', 'Ecology', 
            'Meteorology', 'Anthropology', 'Linguistics', 'Comparative Literature',
            'Art History', 'Music Theory', 'Graphic Design', 'Modern Languages', 
            'Information Technology', 'Robotics', 'Cybersecurity', 
            'Urban Studies', 'Religious Studies', 'Ethics', 'Law', 
            'International Relations', 'Gender Studies', 'Sociology', 
            'Public Health', 'Nutrition', 'Marine Biology', 'Genetics', 
            'Pharmacology', 'Microbiology', 'Immunology', 'Biochemistry', 
            'Forensic Science', 'Astronomy', 'Astrophysics', 'Applied Mathematics',
            'Statistical Analysis', 'Data Science', 'Software Engineering',
            'Game Design', 'Web Development', 'Database Management',
            'Artificial Intelligence', 'Machine Learning', 'Neuroscience', 
            'Engineering Physics', 'Chemical Engineering', 'Civil Engineering'
        ];

        foreach ($subjects as $subject) {
            DB::table('subjects')->insert([
                'name' => $subject,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
