<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    public function run()
    {
        $schools = [
            [
                'name' => 'Konoha Academy',
                'state' => 'Tokyo',
                'city' => 'Shibuya',
                'country' => 'Japan',
            ],
            [
                'name' => 'U.A. High School',
                'state' => 'Tokyo',
                'city' => 'Musutafu',
                'country' => 'Japan',
            ],
            [
                'name' => 'Ouran Academy',
                'state' => 'Kanagawa',
                'city' => 'Yokohama',
                'country' => 'Japan',
            ],
            [
                'name' => 'Honnouji Academy',
                'state' => 'Osaka',
                'city' => 'Naniwa',
                'country' => 'Japan',
            ],
            [
                'name' => 'Death Weapon Meister Academy',
                'state' => 'Kyoto',
                'city' => 'Fushimi',
                'country' => 'Japan',
            ],
            [
                'name' => 'Tenbi Academy',
                'state' => 'Kyoto',
                'city' => 'Uji',
                'country' => 'Japan',
            ],
            [
                'name' => 'Kuoh Academy',
                'state' => 'Saitama',
                'city' => 'Sakura',
                'country' => 'Japan',
            ],
            [
                'name' => 'Yokai Academy',
                'state' => 'Hokkaido',
                'city' => 'Sapporo',
                'country' => 'Japan',
            ],
            [
                'name' => 'Shuchiin Academy',
                'state' => 'Tokyo',
                'city' => 'Chiyoda',
                'country' => 'Japan',
            ],
            [
                'name' => 'Seirin High School',
                'state' => 'Kanagawa',
                'city' => 'Kawasaki',
                'country' => 'Japan',
            ],
            [
                'name' => 'Sakuragaoka High School',
                'state' => 'Shizuoka',
                'city' => 'Numazu',
                'country' => 'Japan',
            ],
            [
                'name' => 'Karasuno High School',
                'state' => 'Miyagi',
                'city' => 'Sendai',
                'country' => 'Japan',
            ],
            [
                'name' => 'Ninja Academy',
                'state' => 'Kumamoto',
                'city' => 'Kumamoto',
                'country' => 'Japan',
            ],
            [
                'name' => 'Rikkaidai Fuzoku',
                'state' => 'Kanagawa',
                'city' => 'Yokosuka',
                'country' => 'Japan',
            ],
            [
                'name' => 'Aldera Junior High',
                'state' => 'Tokyo',
                'city' => 'Musutafu',
                'country' => 'Japan',
            ],
            [
                'name' => 'Cross Academy',
                'state' => 'Osaka',
                'city' => 'Osaka',
                'country' => 'Japan',
            ],
            [
                'name' => 'True Cross Academy',
                'state' => 'Kyoto',
                'city' => 'Kyoto',
                'country' => 'Japan',
            ],
            [
                'name' => 'Starlight Academy',
                'state' => 'Tokyo',
                'city' => 'Minato',
                'country' => 'Japan',
            ],
            [
                'name' => 'Amakusa High School',
                'state' => 'Nagasaki',
                'city' => 'Shimabara',
                'country' => 'Japan',
            ],
            [
                'name' => 'Hakoniwa Academy',
                'state' => 'Chiba',
                'city' => 'Narashino',
                'country' => 'Japan',
            ],
            [
                'name' => 'Kisaragi Academy',
                'state' => 'Tokyo',
                'city' => 'Taito',
                'country' => 'Japan',
            ],
            [
                'name' => 'Totsuki Culinary Academy',
                'state' => 'Tokyo',
                'city' => 'Meguro',
                'country' => 'Japan',
            ],
            [
                'name' => 'Mahora Academy',
                'state' => 'Kanagawa',
                'city' => 'Fujisawa',
                'country' => 'Japan',
            ],
            [
                'name' => 'Nishi High School',
                'state' => 'Osaka',
                'city' => 'Sakai',
                'country' => 'Japan',
            ],
            [
                'name' => 'Otonokizaka High School',
                'state' => 'Tokyo',
                'city' => 'Akihabara',
                'country' => 'Japan',
            ],
            [
                'name' => 'Kamiyama High School',
                'state' => 'Gifu',
                'city' => 'Takayama',
                'country' => 'Japan',
            ],
            [
                'name' => 'Meiou High School',
                'state' => 'Tokyo',
                'city' => 'Setagaya',
                'country' => 'Japan',
            ],
            [
                'name' => 'Ashford Academy',
                'state' => 'Tokyo',
                'city' => 'Chiyoda',
                'country' => 'Japan',
            ],
            [
                'name' => 'Fuuka Academy',
                'state' => 'Hiroshima',
                'city' => 'Hatsukaichi',
                'country' => 'Japan',
            ],
            [
                'name' => 'Sanada North High School',
                'state' => 'Tokyo',
                'city' => 'Shinjuku',
                'country' => 'Japan',
            ],
            [
                'name' => 'Inaba Municipal High School',
                'state' => 'Kanagawa',
                'city' => 'Zushi',
                'country' => 'Japan',
            ],
        ];

        foreach ($schools as $school) {
            DB::table('schools')->insert([
                'name' => $school['name'],
                'state' => $school['state'],
                'city' => $school['city'],
                'country' => $school['country'],
                'school_code' => rand(1000, 9999),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}