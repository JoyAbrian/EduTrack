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
            'Ninjutsu Studies', 'Alchemy', 'Spirit Summoning', 'Demonology', 'Magical Girl Transformation',
            'Mecha Engineering', 'Swordsmanship', 'Gunblade Training', 'Chakra Control', 'Ki Manipulation',
            'Elemental Magic', 'Dark Arts', 'Exorcism Techniques', 'Potion Brewing', 'Mystical Beasts Studies',
            'Time Travel Theory', 'Alternate Dimensions', 'Telepathy and Telekinesis', 'Space Pirate Tactics', 
            'Virtual Reality Combat', 'Hero Academia', 'Villain Psychology', 'Martial Arts Mastery', 'Dragon Taming',
            'Summoner Arts', 'Celestial Magic', 'Holy Magic', 'Forbidden Spells', 'Spirit Weapon Forging', 
            'Advanced Battle Strategy', 'Guild Management', 'Cosmic Energy Control', 'Necromancy', 
            'Monster Hunting', 'Giant Robot Piloting', 'Stealth and Espionage', 'Reincarnation Studies', 
            'Soul Reaper Techniques', 'Shapeshifting', 'Elemental Alchemy', 'Rune Magic', 
            'Divine Intervention', 'Cursed Object Handling', 'Anime Opening Analysis', 'Anime Ending Theory',
            'Protagonist Speech Craft', 'Antagonist Motivation', 'Anime Tropes 101', 'Deus Ex Machina Studies', 
            'Love Triangle Dynamics', 'Tsundere and Yandere Psychology', 'Otaku Culture Studies', 'Moe Studies', 
            'Mecha Design and Development', 'Kaiju Biology', 'Cybernetics', 'Espers and Psychics', 
            'Alien Communication', 'Dystopian Worldbuilding', 'Post-Apocalyptic Survival', 'Alien Invasion Defense',
            'Magical Artifact Research', 'Supernatural Investigation', 'Parallel Universe Exploration',
            'Sentient AI Development', 'Anime Character Design', 'Chibi Art Style', 'Anime Voice Acting',
            'Harem Dynamics', 'Reverse Harem Analysis', 'Ecchi Studies', 'Magical School Etiquette',
            'Combat Tournament Analysis', 'Legendary Weapons Studies', 'Artifact Hunting', 'Guardian Beast Studies',
            'Ancient Prophecies', 'Epic Quest Design', 'Guild Rivalry', 'Hunter Examination',
            'Cyborg Enhancements', 'Mecha Combat Simulation', 'Alternate Reality Programming', 'Virtual Pet Training',
            'Anime Soundtrack Composition', 'Magical Realism', 'Fantasy Map Creation', 'Anime Narrative Structure',
            'Bounty Hunting', 'Sword Art', 'Shinigami Lore', 'Spirit World Navigation', 'Anime Battle Poses',
            'Kawaii Studies', 'Anime Convention Planning', 'Anime Merchandise Design', 'Doujinshi Creation',
            'Manga Illustration', 'Light Novel Writing', 'Anime Scriptwriting', 'Shounen vs Shoujo Dynamics',
            'Magical Girl Sociology', 'Shonen Tournament Strategy', 'Epic Battle Choreography', 'Anime Filler Episode Studies',
            'Mecha Armor Crafting', 'Steampunk Design', 'Vampire Studies', 'Zombie Survival Tactics',
            'Yokai and Supernatural Beings', 'Demon King History', 'Angel Hierarchies', 'Magical Creature Breeding',
            'Artifact Synthesis', 'Anime Shipping Wars', 'Magical Wardrobe Creation', 'Anime Genre Studies',
            'Transformation Sequence Theory', 'Anime Opening Theme Analysis', 'Chuunibyou Studies', 'Issekai World Adaptation',
            'Magical Contract Law', 'Anime Worldbuilding', 'Fantasy Creature Care', 'Magical Item Creation',
            'Gacha Game Economics', 'Magical Tournament Organization', 'Anime Plot Twist Theory', 'Time Loop Phenomena',
            'Future Sight', 'Magical Companions', 'Anime Climaxes', 'Heroic Sacrifice Studies', 
            'Manga Storyboarding', 'Anime Voiceover Techniques', 'Otome Game Development', 'Shoujo Art Techniques',
            'Anime Cosplay Design', 'Mecha Armor Maintenance', 'Anime Battle Mechanics', 'Futuristic Technology in Anime',
            'Anime World Economy', 'Magical Politics', 'Cultural Impact of Anime', 'Anime Parody Studies',
            'Superpowered Battle Analysis', 'Anime Rivalry Dynamics', 'Legendary Questlines', 'Anime Folklore Studies',
            'Magical Beast Biology', 'Psychic Warfare', 'Cyberpunk Aesthetics', 'Anime Fighting Techniques',
            'Anime Theoretical Physics', 'Magical Ethics', 'Anime Multiverse Theory', 'Anime Character Archetypes',
            'Battle Royale Strategy', 'Magical Alignment Theory', 'Anime Visual Effects', 'Hyper-Realistic Animation Techniques',
            'Manga Editing', 'Anime Production', 'Anime Adaptation Analysis', 'Otome Game Plot Design',
            'Anime Climactic Moments', 'Anime Pilot Episodes', 'Anime Fan Theory Development', 'Shoujo Manga Romance Theory',
            'Mecha Weapon Systems', 'Anime Character Development', 'Moe Anthropomorphism', 'Magical Weapons Training',
            'Anime Broadcasting History', 'Anime Character Dynamics', 'Magical World Exploration', 'Anime Power Scaling',
            'Heroic Journey Analysis', 'Anime Plot Devices', 'Anime Franchise Management', 'Anime Marketing Strategies',
            'Anime Studio Management', 'Anime Cultural Influence', 'Magical Equipment Upgrades', 'Anime Power Levels',
            'Sentient Robots', 'Crossover Universe Creation', 'Anime Game Adaptation', 'Alternate Reality Exploration',
            'Superhuman Abilities', 'Legendary Heroes Studies', 'Anime Sequel Production', 'Anime Story Continuity',
            'Anime Industry Ethics', 'Anime Merchandise Economics', 'Anime Fanbase Analysis', 'Anime Collector’s Items',
            'Anime Iconography', 'Mecha Blueprints', 'Anime Art Styles', 'Fantasy Genre Studies', 'Anime Historiography'
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
