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
            // Classes for Konoha Academy
            ['name' => 'Team 7 - Ninja Squad', 'school_id' => 1],
            ['name' => 'Team 10 - Strategic Unit', 'school_id' => 1],

            // Classes for U.A. High School
            ['name' => '1-A Hero Course', 'school_id' => 2],
            ['name' => '1-B Hero Course', 'school_id' => 2],

            // Classes for Ouran Academy
            ['name' => 'Host Club Elite', 'school_id' => 3],
            ['name' => 'Class 1-A: Elegant Scholars', 'school_id' => 3],

            // Classes for Honnouji Academy
            ['name' => 'Elite Four - Top Class', 'school_id' => 4],
            ['name' => 'Class 2-A: Combatants', 'school_id' => 4],

            // Classes for Death Weapon Meister Academy
            ['name' => 'Class 1-A: Meisters & Weapons', 'school_id' => 5],
            ['name' => 'Class 1-B: Demon Hunters', 'school_id' => 5],

            // Classes for Tenbi Academy
            ['name' => 'Class 1-A: Magical Prodigies', 'school_id' => 6],
            ['name' => 'Class 2-A: Spellcasters', 'school_id' => 6],

            // Classes for Kuoh Academy
            ['name' => 'Class 1-A: Devil Hunters', 'school_id' => 7],
            ['name' => 'Class 1-B: Sacred Guardians', 'school_id' => 7],

            // Classes for Yokai Academy
            ['name' => 'Class 1-A: Supernatural Studies', 'school_id' => 8],
            ['name' => 'Class 1-B: Yokai Protection', 'school_id' => 8],

            // Classes for Shuchiin Academy
            ['name' => 'Student Council Elite', 'school_id' => 9],
            ['name' => 'Class 2-A: Academic Excellence', 'school_id' => 9],

            // Classes for Seirin High School
            ['name' => 'Class 1-A: Basketball Prospects', 'school_id' => 10],
            ['name' => 'Class 2-A: Rising Stars', 'school_id' => 10],

            // Classes for Sakuragaoka High School
            ['name' => 'Class 1-A: Music Enthusiasts', 'school_id' => 11],
            ['name' => 'Class 2-A: Performance Troupe', 'school_id' => 11],

            // Classes for Karasuno High School
            ['name' => 'Class 1-A: Volleyball Squad', 'school_id' => 12],
            ['name' => 'Class 2-A: Athletic Team', 'school_id' => 12],

            // Classes for Ninja Academy
            ['name' => 'Class 1-A: Stealth Warriors', 'school_id' => 13],
            ['name' => 'Class 2-A: Shadow Assassins', 'school_id' => 13],

            // Classes for Rikkaidai Fuzoku
            ['name' => 'Class 1-A: Tennis Champions', 'school_id' => 14],
            ['name' => 'Class 2-A: Athletic Stars', 'school_id' => 14],

            // Classes for Aldera Junior High
            ['name' => 'Class 1-A: Young Heroes', 'school_id' => 15],
            ['name' => 'Class 2-A: Future Prodigies', 'school_id' => 15],

            // Classes for Cross Academy
            ['name' => 'Day Class: Humans', 'school_id' => 16],
            ['name' => 'Night Class: Vampires', 'school_id' => 16],

            // Classes for True Cross Academy
            ['name' => 'Class 1-A: Exorcists', 'school_id' => 17],
            ['name' => 'Class 2-A: Demon Hunters', 'school_id' => 17],

            // Classes for Starlight Academy
            ['name' => 'Class 1-A: Rising Stars', 'school_id' => 18],
            ['name' => 'Class 2-A: Aspiring Celebrities', 'school_id' => 18],

            // Classes for Amakusa High School
            ['name' => 'Class 1-A: Adventurers', 'school_id' => 19],
            ['name' => 'Class 2-A: Seafaring Crew', 'school_id' => 19],

            // Classes for Hakoniwa Academy
            ['name' => 'Class 1-A: Gardeners', 'school_id' => 20],
            ['name' => 'Class 2-A: Cultivators', 'school_id' => 20],

            // Classes for Kisaragi Academy
            ['name' => 'Class 1-A: Magical Scholars', 'school_id' => 21],
            ['name' => 'Class 2-A: Enchanted Scholars', 'school_id' => 21],

            // Classes for Totsuki Culinary Academy
            ['name' => 'Elite 10 - Top Chefs', 'school_id' => 22],
            ['name' => 'First-Year Culinary Class', 'school_id' => 22],

            // Classes for Mahora Academy
            ['name' => 'Class 1-A: Magical Studies', 'school_id' => 23],
            ['name' => 'Class 1-B: Adventure Seekers', 'school_id' => 23],

            // Classes for Nishi High School
            ['name' => 'Class 1-A: Combatants', 'school_id' => 24],
            ['name' => 'Class 2-A: Tactical Unit', 'school_id' => 24],

            // Classes for Otonokizaka High School
            ['name' => 'Class 1-A: Idol Aspirants', 'school_id' => 25],
            ['name' => 'Class 2-A: Performance Team', 'school_id' => 25],

            // Classes for Kamiyama High School
            ['name' => 'Class 1-A: Rural Scholars', 'school_id' => 26],
            ['name' => 'Class 2-A: Local Heroes', 'school_id' => 26],

            // Classes for Meiou High School
            ['name' => 'Class 1-A: Urban Legends', 'school_id' => 27],
            ['name' => 'Class 2-A: Modern Knights', 'school_id' => 27],

            // Classes for Ashford Academy
            ['name' => 'Class 1-A: Elite Diplomats', 'school_id' => 28],
            ['name' => 'Class 2-A: Future Leaders', 'school_id' => 28],

            // Classes for Fuuka Academy
            ['name' => 'Class 1-A: Scenic Adventurers', 'school_id' => 29],
            ['name' => 'Class 2-A: Cultural Explorers', 'school_id' => 29],

            // Classes for Sanada North High School
            ['name' => 'Class 1-A: High Achievers', 'school_id' => 30],
            ['name' => 'Class 2-A: Rising Stars', 'school_id' => 30],

            // Classes for Inaba Municipal High School
            ['name' => 'Class 1-A: Town Guardians', 'school_id' => 31],
            ['name' => 'Class 2-A: Community Leaders', 'school_id' => 31],
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
