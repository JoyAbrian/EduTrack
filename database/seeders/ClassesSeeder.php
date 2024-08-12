<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            // U.A. High School
            ['name' => 'Class 1-A', 'school_id' => 2],
            ['name' => 'Class 1-B', 'school_id' => 2],
            ['name' => 'Hero Course', 'school_id' => 2],
            ['name' => 'Support Course', 'school_id' => 2],

            // Ouran Academy
            ['name' => 'Class 1-S', 'school_id' => 3],
            ['name' => 'Host Club', 'school_id' => 3],
            ['name' => 'Music Room 3', 'school_id' => 3],

            // Honnouji Academy
            ['name' => 'Elite Four', 'school_id' => 4],
            ['name' => 'Class No-Star', 'school_id' => 4],
            ['name' => 'Class One-Star', 'school_id' => 4],

            // Death Weapon Meister Academy
            ['name' => 'Scythe Meister', 'school_id' => 5],
            ['name' => 'Weapon Class', 'school_id' => 5],
            ['name' => 'Death Scythe Class', 'school_id' => 5],

            // Tenbi Academy
            ['name' => 'Class 2-A', 'school_id' => 6],
            ['name' => 'Class 3-A', 'school_id' => 6],
            ['name' => 'Maken Club', 'school_id' => 6],

            // Kuoh Academy
            ['name' => 'Class Devils', 'school_id' => 7],
            ['name' => 'Occult Research Club', 'school_id' => 7],
            ['name' => 'Class Fallen', 'school_id' => 7],

            // Yokai Academy
            ['name' => 'Class Yokai', 'school_id' => 8],
            ['name' => 'Monster Class', 'school_id' => 8],
            ['name' => 'Class S-Class', 'school_id' => 8],

            // Shuchiin Academy
            ['name' => 'Student Council', 'school_id' => 9],
            ['name' => 'Class A1', 'school_id' => 9],
            ['name' => 'Class B1', 'school_id' => 9],

            // Seirin High School
            ['name' => 'Class Miracle', 'school_id' => 10],
            ['name' => 'Basketball Club', 'school_id' => 10],
            ['name' => 'Class 2-A', 'school_id' => 10],

            // Sakuragaoka High School
            ['name' => 'Light Music Club', 'school_id' => 11],
            ['name' => 'Class 1-B', 'school_id' => 11],
            ['name' => 'Class 2-B', 'school_id' => 11],

            // Karasuno High School
            ['name' => 'Volleyball Club', 'school_id' => 12],
            ['name' => 'Class 1-A', 'school_id' => 12],
            ['name' => 'Class 2-B', 'school_id' => 12],

            // Ninja Academy
            ['name' => 'Ninja Class', 'school_id' => 13],
            ['name' => 'Genin Class', 'school_id' => 13],
            ['name' => 'Chunin Class', 'school_id' => 13],

            // Rikkaidai Fuzoku
            ['name' => 'Tennis Club', 'school_id' => 14],
            ['name' => 'Class 3-B', 'school_id' => 14],
            ['name' => 'Class 1-A', 'school_id' => 14],

            // Aldera Junior High
            ['name' => 'Class 2-C', 'school_id' => 15],
            ['name' => 'Class 3-D', 'school_id' => 15],
            ['name' => 'Class 1-B', 'school_id' => 15],

            // Cross Academy
            ['name' => 'Night Class', 'school_id' => 16],
            ['name' => 'Day Class', 'school_id' => 16],
            ['name' => 'Disciplinary Committee', 'school_id' => 16],

            // True Cross Academy
            ['name' => 'Exorcist Class', 'school_id' => 17],
            ['name' => 'Knight Class', 'school_id' => 17],
            ['name' => 'Dragoon Class', 'school_id' => 17],

            // Starlight Academy
            ['name' => 'Class 1-Idol', 'school_id' => 18],
            ['name' => 'Class 2-Idol', 'school_id' => 18],
            ['name' => 'Class 3-Idol', 'school_id' => 18],

            // Amakusa High School
            ['name' => 'Class Shuriken', 'school_id' => 19],
            ['name' => 'Class 1-A', 'school_id' => 19],
            ['name' => 'Class 2-B', 'school_id' => 19],

            // Hakoniwa Academy
            ['name' => 'Class Plus Ultra', 'school_id' => 20],
            ['name' => 'Class 2-A', 'school_id' => 20],
            ['name' => 'Class 1-B', 'school_id' => 20],

            // Kisaragi Academy
            ['name' => 'Class Cursed', 'school_id' => 21],
            ['name' => 'Class 3-A', 'school_id' => 21],
            ['name' => 'Class 2-C', 'school_id' => 21],

            // Totsuki Culinary Academy
            ['name' => 'Elite Ten', 'school_id' => 22],
            ['name' => 'Class 1-A', 'school_id' => 22],
            ['name' => 'Class 2-B', 'school_id' => 22],

            // Mahora Academy
            ['name' => 'Class 3-A', 'school_id' => 23],
            ['name' => 'Class 2-A', 'school_id' => 23],
            ['name' => 'Class B', 'school_id' => 23],

            // Nishi High School
            ['name' => 'Class Nishi', 'school_id' => 24],
            ['name' => 'Class 1-C', 'school_id' => 24],
            ['name' => 'Class 2-D', 'school_id' => 24],

            // Otonokizaka High School
            ['name' => 'Idol Club', 'school_id' => 25],
            ['name' => 'Class 3-A', 'school_id' => 25],
            ['name' => 'Class 2-C', 'school_id' => 25],

            // Kamiyama High School
            ['name' => 'Class Classics', 'school_id' => 26],
            ['name' => 'Class 1-A', 'school_id' => 26],
            ['name' => 'Class 3-B', 'school_id' => 26],

            // Meiou High School
            ['name' => 'Class Moon', 'school_id' => 27],
            ['name' => 'Class 2-B', 'school_id' => 27],
            ['name' => 'Class 1-C', 'school_id' => 27],

            // Ashford Academy
            ['name' => 'Knightmare Frame Pilots', 'school_id' => 28],
            ['name' => 'Student Council', 'school_id' => 28],
            ['name' => 'Class 1-A', 'school_id' => 28],

            // Fuuka Academy
            ['name' => 'Class Hime', 'school_id' => 29],
            ['name' => 'Class 2-A', 'school_id' => 29],
            ['name' => 'Class 3-C', 'school_id' => 29],

            // Sanada North High School
            ['name' => 'Student Council', 'school_id' => 30],
            ['name' => 'Class 1-A', 'school_id' => 30],
            ['name' => 'Class 2-D', 'school_id' => 30],

            // Inaba Municipal High School
            ['name' => 'Investigation Team', 'school_id' => 31],
            ['name' => 'Class 2-A', 'school_id' => 31],
            ['name' => 'Class 1-B', 'school_id' => 31],
        ];

        foreach ($classes as $class) {
            DB::table('classes')->insert([
                'name' => $class['name'],
                'school_id' => $class['school_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
