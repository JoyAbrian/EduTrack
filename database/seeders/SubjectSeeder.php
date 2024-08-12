<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        $subjects = [
            // Subjects for Konoha Academy
            ['name' => 'Ninjutsu'],
            ['name' => 'Genjutsu'],
            ['name' => 'Taijutsu'],
            
            // Subjects for U.A. High School
            ['name' => 'Hero Studies'],
            ['name' => 'Combat Training'],
            ['name' => 'Quirk Theory'],
            
            // Subjects for Ouran Academy
            ['name' => 'International Relations'],
            ['name' => 'Etiquette'],
            ['name' => 'Business Management'],
            
            // Subjects for Honnouji Academy
            ['name' => 'Goku Uniform Studies'],
            ['name' => 'Revolutionary Strategy'],
            ['name' => 'Martial Arts'],
            
            // Subjects for Death Weapon Meister Academy
            ['name' => 'Weapon Studies'],
            ['name' => 'Meister Training'],
            ['name' => 'Soul Resonance'],
            
            // Subjects for Tenbi Academy
            ['name' => 'Magical Theory'],
            ['name' => 'Mystical Arts'],
            ['name' => 'Enchantments'],
            
            // Subjects for Kuoh Academy
            ['name' => 'Occult Studies'],
            ['name' => 'Supernatural Phenomena'],
            ['name' => 'Battle Strategies'],
            
            // Subjects for Yokai Academy
            ['name' => 'Monster Studies'],
            ['name' => 'Spiritual Awareness'],
            ['name' => 'Demonology'],
            
            // Subjects for Shuchiin Academy
            ['name' => 'Student Council Duties'],
            ['name' => 'Leadership Skills'],
            ['name' => 'Public Speaking'],
            
            // Subjects for Seirin High School
            ['name' => 'Basketball Techniques'],
            ['name' => 'Team Dynamics'],
            ['name' => 'Sports Science'],
            
            // Subjects for Sakuragaoka High School
            ['name' => 'Music Theory'],
            ['name' => 'Performance Skills'],
            ['name' => 'Stage Production'],
            
            // Subjects for Karasuno High School
            ['name' => 'Volleyball Training'],
            ['name' => 'Team Strategy'],
            ['name' => 'Physical Conditioning'],
            
            // Subjects for Ninja Academy
            ['name' => 'Stealth Tactics'],
            ['name' => 'Weapon Handling'],
            ['name' => 'Survival Skills'],
            
            // Subjects for Rikkaidai Fuzoku
            ['name' => 'Tennis Techniques'],
            ['name' => 'Match Strategy'],
            ['name' => 'Physical Endurance'],
            
            // Subjects for Aldera Junior High
            ['name' => 'Hero Prep Courses'],
            ['name' => 'Crisis Management'],
            ['name' => 'Combat Training'],
            
            // Subjects for Cross Academy
            ['name' => 'Vampire Studies'],
            ['name' => 'Blood Magic'],
            ['name' => 'Night Combat'],
            
            // Subjects for True Cross Academy
            ['name' => 'Exorcism Techniques'],
            ['name' => 'Occult Studies'],
            ['name' => 'Mystical Arts'],
            
            // Subjects for Starlight Academy
            ['name' => 'Star Magic'],
            ['name' => 'Celestial Navigation'],
            ['name' => 'Astrological Studies'],
            
            // Subjects for Amakusa High School
            ['name' => 'Samurai Arts'],
            ['name' => 'Traditional Japanese Studies'],
            ['name' => 'Historical Warfare'],
            
            // Subjects for Hakoniwa Academy
            ['name' => 'Virtual Reality Studies'],
            ['name' => 'Simulation Training'],
            ['name' => 'AI Programming'],
            
            // Subjects for Kisaragi Academy
            ['name' => 'Computer Science'],
            ['name' => 'Game Development'],
            ['name' => 'Cybersecurity'],
            
            // Subjects for Totsuki Culinary Academy
            ['name' => 'Advanced Cooking Techniques'],
            ['name' => 'Food Science'],
            ['name' => 'Culinary Arts'],
            
            // Subjects for Mahora Academy
            ['name' => 'Magic Theory'],
            ['name' => 'Advanced Spellcraft'],
            ['name' => 'Mystical Studies'],
            
            // Subjects for Nishi High School
            ['name' => 'Cultural Studies'],
            ['name' => 'Social Sciences'],
            ['name' => 'Community Service'],
            
            // Subjects for Otonokizaka High School
            ['name' => 'Music Performance'],
            ['name' => 'Band Studies'],
            ['name' => 'Vocal Training'],
            
            // Subjects for Kamiyama High School
            ['name' => 'Cultural History'],
            ['name' => 'Local Legends'],
            ['name' => 'Historical Preservation'],
            
            // Subjects for Meiou High School
            ['name' => 'Academic Excellence'],
            ['name' => 'Critical Thinking'],
            ['name' => 'Leadership Development'],
            
            // Subjects for Ashford Academy
            ['name' => 'Political Science'],
            ['name' => 'International Relations'],
            ['name' => 'Strategic Studies'],
            
            // Subjects for Fuuka Academy
            ['name' => 'Art History'],
            ['name' => 'Creative Arts'],
            ['name' => 'Artistic Techniques'],
            
            // Subjects for Sanada North High School
            ['name' => 'Martial Arts Training'],
            ['name' => 'Combat Strategy'],
            ['name' => 'Physical Conditioning'],
            
            // Subjects for Inaba Municipal High School
            ['name' => 'Agricultural Science'],
            ['name' => 'Rural Development'],
            ['name' => 'Environmental Studies'],
        ];

        foreach ($subjects as $subject) {
            DB::table('subjects')->insert([
                'name' => $subject['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}