<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $teachers = [
            // Teachers for Konoha Academy
            ['name' => 'Kakashi Hatake', 'email' => 'kakashi@konoha.ac.jp', 'phone' => '080-1234-5678', 'gender' => 'Male', 'subject_id' => 1, 'school_id' => 1],
            ['name' => 'Iruka Umino', 'email' => 'iruka@konoha.ac.jp', 'phone' => '080-2345-6789', 'gender' => 'Male', 'subject_id' => 2, 'school_id' => 1],
            ['name' => 'Tsunade Senju', 'email' => 'tsunade@konoha.ac.jp', 'phone' => '080-3456-7890', 'gender' => 'Female', 'subject_id' => 3, 'school_id' => 1],

            // Teachers for U.A. High School
            ['name' => 'All Might', 'email' => 'allmight@ua.ac.jp', 'phone' => '080-4567-8901', 'gender' => 'Male', 'subject_id' => 4, 'school_id' => 2],
            ['name' => 'Shota Aizawa', 'email' => 'aizawa@ua.ac.jp', 'phone' => '080-5678-9012', 'gender' => 'Male', 'subject_id' => 5, 'school_id' => 2],
            ['name' => 'Nezu', 'email' => 'nezu@ua.ac.jp', 'phone' => '080-6789-0123', 'gender' => 'Male', 'subject_id' => 6, 'school_id' => 2],

            // Teachers for Ouran Academy
            ['name' => 'Kyoya Ootori', 'email' => 'kyoya@ouran.ac.jp', 'phone' => '080-7890-1234', 'gender' => 'Male', 'subject_id' => 7, 'school_id' => 3],
            ['name' => 'Tamaki Suoh', 'email' => 'tamaki@ouran.ac.jp', 'phone' => '080-8901-2345', 'gender' => 'Male', 'subject_id' => 8, 'school_id' => 3],
            ['name' => 'Haruhi Fujioka', 'email' => 'haruhi@ouran.ac.jp', 'phone' => '080-9012-3456', 'gender' => 'Female', 'subject_id' => 9, 'school_id' => 3],

            // Teachers for Honnouji Academy
            ['name' => 'Satsuki Kiryuin', 'email' => 'satsuki@honnouji.ac.jp', 'phone' => '080-0123-4567', 'gender' => 'Female', 'subject_id' => 10, 'school_id' => 4],
            ['name' => 'Ryuko Matoi', 'email' => 'ryuko@honnouji.ac.jp', 'phone' => '080-1234-5678', 'gender' => 'Female', 'subject_id' => 11, 'school_id' => 4],
            ['name' => 'Aikuro Mikisugi', 'email' => 'aikuro@honnouji.ac.jp', 'phone' => '080-2345-6789', 'gender' => 'Male', 'subject_id' => 12, 'school_id' => 4],

            // Teachers for Death Weapon Meister Academy
            ['name' => 'Shinigami-sama', 'email' => 'shinigami@dwma.ac.jp', 'phone' => '080-3456-7890', 'gender' => 'Male', 'subject_id' => 13, 'school_id' => 5],
            ['name' => 'Stein', 'email' => 'stein@dwma.ac.jp', 'phone' => '080-4567-8901', 'gender' => 'Male', 'subject_id' => 14, 'school_id' => 5],
            ['name' => 'Maka Albarn', 'email' => 'maka@dwma.ac.jp', 'phone' => '080-5678-9012', 'gender' => 'Female', 'subject_id' => 15, 'school_id' => 5],

            // Teachers for Tenbi Academy
            ['name' => 'Aoi Kiriya', 'email' => 'aoi@tenbi.ac.jp', 'phone' => '080-6789-0123', 'gender' => 'Female', 'subject_id' => 16, 'school_id' => 6],
            ['name' => 'Kobayashi', 'email' => 'kobayashi@tenbi.ac.jp', 'phone' => '080-7890-1234', 'gender' => 'Female', 'subject_id' => 17, 'school_id' => 6],
            ['name' => 'Erika', 'email' => 'erika@tenbi.ac.jp', 'phone' => '080-8901-2345', 'gender' => 'Female', 'subject_id' => 18, 'school_id' => 6],

            // Teachers for Kuoh Academy
            ['name' => 'Rias Gremory', 'email' => 'rias@kuoh.ac.jp', 'phone' => '080-9012-3456', 'gender' => 'Female', 'subject_id' => 19, 'school_id' => 7],
            ['name' => 'Akeno Himejima', 'email' => 'akeno@kuoh.ac.jp', 'phone' => '080-0123-4567', 'gender' => 'Female', 'subject_id' => 20, 'school_id' => 7],
            ['name' => 'Kiba Yuuto', 'email' => 'kiba@kuoh.ac.jp', 'phone' => '080-1234-5678', 'gender' => 'Male', 'subject_id' => 21, 'school_id' => 7],

            // Teachers for Yokai Academy
            ['name' => 'Koyomi Araragi', 'email' => 'koyomi@yokai.ac.jp', 'phone' => '080-2345-6789', 'gender' => 'Male', 'subject_id' => 22, 'school_id' => 8],
            ['name' => 'Hitagi Senjougahara', 'email' => 'hitagi@yokai.ac.jp', 'phone' => '080-3456-7890', 'gender' => 'Female', 'subject_id' => 23, 'school_id' => 8],
            ['name' => 'Mayoi Hachikuji', 'email' => 'mayoi@yokai.ac.jp', 'phone' => '080-4567-8901', 'gender' => 'Female', 'subject_id' => 24, 'school_id' => 8],

            // Teachers for Shuchiin Academy
            ['name' => 'Miyuki Shirogane', 'email' => 'miyuki@shuchiin.ac.jp', 'phone' => '080-5678-9012', 'gender' => 'Male', 'subject_id' => 25, 'school_id' => 9],
            ['name' => 'Kaguya Shinomiya', 'email' => 'kaguya@shuchiin.ac.jp', 'phone' => '080-6789-0123', 'gender' => 'Female', 'subject_id' => 26, 'school_id' => 9],
            ['name' => 'Ai Hayasaka', 'email' => 'ai@shuchiin.ac.jp', 'phone' => '080-7890-1234', 'gender' => 'Female', 'subject_id' => 27, 'school_id' => 9],

            // Teachers for Seirin High School
            ['name' => 'Kuroko Tetsuya', 'email' => 'kuroko@seirin.ac.jp', 'phone' => '080-8901-2345', 'gender' => 'Male', 'subject_id' => 28, 'school_id' => 10],
            ['name' => 'Kagami Taiga', 'email' => 'kagami@seirin.ac.jp', 'phone' => '080-9012-3456', 'gender' => 'Male', 'subject_id' => 29, 'school_id' => 10],
            ['name' => 'Riko Aida', 'email' => 'riko@seirin.ac.jp', 'phone' => '080-0123-4567', 'gender' => 'Female', 'subject_id' => 30, 'school_id' => 10],

            // Teachers for Sakuragaoka High School
            ['name' => 'Yui Hirasawa', 'email' => 'yui@sakuragaoka.ac.jp', 'phone' => '080-1234-5678', 'gender' => 'Female', 'subject_id' => 31, 'school_id' => 11],
            ['name' => 'Mio Akiyama', 'email' => 'mio@sakuragaoka.ac.jp', 'phone' => '080-2345-6789', 'gender' => 'Female', 'subject_id' => 32, 'school_id' => 11],
            ['name' => 'Ritsu Tainaka', 'email' => 'ritsu@sakuragaoka.ac.jp', 'phone' => '080-3456-7890', 'gender' => 'Female', 'subject_id' => 33, 'school_id' => 11],

            // Teachers for Karasuno High School
            ['name' => 'Daichi Sawamura', 'email' => 'daichi@karasuno.ac.jp', 'phone' => '080-4567-8901', 'gender' => 'Male', 'subject_id' => 34, 'school_id' => 12],
            ['name' => 'Kageyama Tobio', 'email' => 'kageyama@karasuno.ac.jp', 'phone' => '080-5678-9012', 'gender' => 'Male', 'subject_id' => 35, 'school_id' => 12],
            ['name' => 'Suga Koushi', 'email' => 'suga@karasuno.ac.jp', 'phone' => '080-6789-0123', 'gender' => 'Male', 'subject_id' => 36, 'school_id' => 12],

            // Teachers for Ninja Academy
            ['name' => 'Naruto Uzumaki', 'email' => 'naruto@ninja.ac.jp', 'phone' => '080-7890-1234', 'gender' => 'Male', 'subject_id' => 37, 'school_id' => 13],
            ['name' => 'Sakura Haruno', 'email' => 'sakura@ninja.ac.jp', 'phone' => '080-8901-2345', 'gender' => 'Female', 'subject_id' => 38, 'school_id' => 13],
            ['name' => 'Sasuke Uchiha', 'email' => 'sasuke@ninja.ac.jp', 'phone' => '080-9012-3456', 'gender' => 'Male', 'subject_id' => 39, 'school_id' => 13],

            // Teachers for Rikkaidai Fuzoku
            ['name' => 'Yukimura Seiichi', 'email' => 'yukimura@rikkaidai.ac.jp', 'phone' => '080-0123-4567', 'gender' => 'Male', 'subject_id' => 40, 'school_id' => 14],
            ['name' => 'Sanada Yukimura', 'email' => 'sanada@rikkaidai.ac.jp', 'phone' => '080-1234-5678', 'gender' => 'Male', 'subject_id' => 41, 'school_id' => 14],
            ['name' => 'Kanmaru', 'email' => 'kanmaru@rikkaidai.ac.jp', 'phone' => '080-2345-6789', 'gender' => 'Male', 'subject_id' => 42, 'school_id' => 14],

            // Teachers for Aldera Junior High
            ['name' => 'Katsuki Bakugo', 'email' => 'bakugo@aldera.ac.jp', 'phone' => '080-3456-7890', 'gender' => 'Male', 'subject_id' => 43, 'school_id' => 15],
            ['name' => 'Izuku Midoriya', 'email' => 'midoriya@aldera.ac.jp', 'phone' => '080-4567-8901', 'gender' => 'Male', 'subject_id' => 44, 'school_id' => 15],
            ['name' => 'Ochaco Uraraka', 'email' => 'urakaka@aldera.ac.jp', 'phone' => '080-5678-9012', 'gender' => 'Female', 'subject_id' => 45, 'school_id' => 15],

            // Teachers for Cross Academy
            ['name' => 'Yoruichi Shihouin', 'email' => 'yoruichi@cross.ac.jp', 'phone' => '080-6789-0123', 'gender' => 'Female', 'subject_id' => 46, 'school_id' => 16],
            ['name' => 'Soi Fon', 'email' => 'soifon@cross.ac.jp', 'phone' => '080-7890-1234', 'gender' => 'Female', 'subject_id' => 47, 'school_id' => 16],
            ['name' => 'Shunsui Kyouraku', 'email' => 'shunsui@cross.ac.jp', 'phone' => '080-8901-2345', 'gender' => 'Male', 'subject_id' => 48, 'school_id' => 16],

            // Teachers for True Cross Academy
            ['name' => 'Ryuji Suguro', 'email' => 'ryuji@truecross.ac.jp', 'phone' => '080-9012-3456', 'gender' => 'Male', 'subject_id' => 49, 'school_id' => 17],
            ['name' => 'Shiemi Yusa', 'email' => 'shiemi@truecross.ac.jp', 'phone' => '080-0123-4567', 'gender' => 'Female', 'subject_id' => 50, 'school_id' => 17],
            ['name' => 'Mephisto Pheles', 'email' => 'mephisto@truecross.ac.jp', 'phone' => '080-1234-5678', 'gender' => 'Male', 'subject_id' => 51, 'school_id' => 17],

            // Teachers for Starlight Academy
            ['name' => 'Hoshino Ai', 'email' => 'ai@starlight.ac.jp', 'phone' => '080-2345-6789', 'gender' => 'Female', 'subject_id' => 52, 'school_id' => 18],
            ['name' => 'Koyomi Araragi', 'email' => 'aragi@starlight.ac.jp', 'phone' => '080-3456-7890', 'gender' => 'Male', 'subject_id' => 53, 'school_id' => 18],
            ['name' => 'Hikaru Shindo', 'email' => 'hikaru@starlight.ac.jp', 'phone' => '080-4567-8901', 'gender' => 'Male', 'subject_id' => 54, 'school_id' => 18],

            // Teachers for Amakusa High School
            ['name' => 'Kageyama Shigeru', 'email' => 'shigeru@amakusa.ac.jp', 'phone' => '080-5678-9012', 'gender' => 'Male', 'subject_id' => 55, 'school_id' => 19],
            ['name' => 'Kazuichi Yagami', 'email' => 'kazuichi@amakusa.ac.jp', 'phone' => '080-6789-0123', 'gender' => 'Male', 'subject_id' => 56, 'school_id' => 19],
            ['name' => 'Kanzaki Hiroko', 'email' => 'hiroko@amakusa.ac.jp', 'phone' => '080-7890-1234', 'gender' => 'Female', 'subject_id' => 57, 'school_id' => 19],

            // Teachers for Hakoniwa Academy
            ['name' => 'Shinya Kogami', 'email' => 'kogami@hakoniwa.ac.jp', 'phone' => '080-8901-2345', 'gender' => 'Male', 'subject_id' => 58, 'school_id' => 20],
            ['name' => 'Akane Tsunemori', 'email' => 'akane@hakoniwa.ac.jp', 'phone' => '080-9012-3456', 'gender' => 'Female', 'subject_id' => 59, 'school_id' => 20],
            ['name' => 'Masaoka', 'email' => 'masaoka@hakoniwa.ac.jp', 'phone' => '080-0123-4567', 'gender' => 'Male', 'subject_id' => 60, 'school_id' => 20],

            // Teachers for Kisaragi Academy
            ['name' => 'Miyamoto Musashi', 'email' => 'musashi@kisara.ac.jp', 'phone' => '080-1234-5678', 'gender' => 'Male', 'subject_id' => 61, 'school_id' => 21],
            ['name' => 'Kenshin Himura', 'email' => 'kenshin@kisara.ac.jp', 'phone' => '080-2345-6789', 'gender' => 'Male', 'subject_id' => 62, 'school_id' => 21],
            ['name' => 'Sanada Yukimura', 'email' => 'yukimura@kisara.ac.jp', 'phone' => '080-3456-7890', 'gender' => 'Male', 'subject_id' => 63, 'school_id' => 21],
        
            // Teachers for Totsuki Culinary Academy
            ['name' => 'Soma Yukihira', 'email' => 'soma@totsuki.ac.jp', 'phone' => '080-1234-5678', 'gender' => 'Male', 'subject_id' => 64, 'school_id' => 22],
            ['name' => 'Erina Nakiri', 'email' => 'erina@totsuki.ac.jp', 'phone' => '080-2345-6789', 'gender' => 'Female', 'subject_id' => 65, 'school_id' => 22],
            ['name' => 'Joichiro Saiba', 'email' => 'joichiro@totsuki.ac.jp', 'phone' => '080-3456-7890', 'gender' => 'Male', 'subject_id' => 66, 'school_id' => 22],

            // Teachers for Mahora Academy
            ['name' => 'Negi Springfield', 'email' => 'negi@mahora.ac.jp', 'phone' => '080-4567-8901', 'gender' => 'Male', 'subject_id' => 67, 'school_id' => 23],
            ['name' => 'Asuna Kagurazaka', 'email' => 'asuna@mahora.ac.jp', 'phone' => '080-5678-9012', 'gender' => 'Female', 'subject_id' => 68, 'school_id' => 23],
            ['name' => 'Nodoka Miyazaki', 'email' => 'nodoka@mahora.ac.jp', 'phone' => '080-6789-0123', 'gender' => 'Female', 'subject_id' => 69, 'school_id' => 23],

            // Teachers for Nishi High School
            ['name' => 'Mikako Satsukitani', 'email' => 'mikako@nishi.ac.jp', 'phone' => '080-7890-1234', 'gender' => 'Female', 'subject_id' => 70, 'school_id' => 24],
            ['name' => 'Yoshitaka Koshida', 'email' => 'yoshitaka@nishi.ac.jp', 'phone' => '080-8901-2345', 'gender' => 'Male', 'subject_id' => 71, 'school_id' => 24],
            ['name' => 'Hikaru Sakurai', 'email' => 'hikaru@nishi.ac.jp', 'phone' => '080-9012-3456', 'gender' => 'Male', 'subject_id' => 72, 'school_id' => 24],

            // Teachers for Otonokizaka High School
            ['name' => 'Honoka Kosaka', 'email' => 'honoka@otonokizaka.ac.jp', 'phone' => '080-0123-4567', 'gender' => 'Female', 'subject_id' => 73, 'school_id' => 25],
            ['name' => 'Umi Sonoda', 'email' => 'umi@otonokizaka.ac.jp', 'phone' => '080-1234-5678', 'gender' => 'Female', 'subject_id' => 74, 'school_id' => 25],
            ['name' => 'Kotori Minami', 'email' => 'kotori@otonokizaka.ac.jp', 'phone' => '080-2345-6789', 'gender' => 'Female', 'subject_id' => 75, 'school_id' => 25],

            // Teachers for Kamiyama High School
            ['name' => 'Mikako Satsukitani', 'email' => 'mikako@kamiyama.ac.jp', 'phone' => '080-3456-7890', 'gender' => 'Female', 'subject_id' => 76, 'school_id' => 26],
            ['name' => 'Ryo Takasugi', 'email' => 'ryo@kamiyama.ac.jp', 'phone' => '080-4567-8901', 'gender' => 'Male', 'subject_id' => 77, 'school_id' => 26],
            ['name' => 'Kaito Nakamura', 'email' => 'kaito@kamiyama.ac.jp', 'phone' => '080-5678-9012', 'gender' => 'Male', 'subject_id' => 78, 'school_id' => 26],

            // Teachers for Meiou High School
            ['name' => 'Shouta Aoi', 'email' => 'shouta@meiou.ac.jp', 'phone' => '080-6789-0123', 'gender' => 'Male', 'subject_id' => 79, 'school_id' => 27],
            ['name' => 'Miku Nakano', 'email' => 'miku@meiou.ac.jp', 'phone' => '080-7890-1234', 'gender' => 'Female', 'subject_id' => 80, 'school_id' => 27],
            ['name' => 'Kazuya Maeda', 'email' => 'kazuya@meiou.ac.jp', 'phone' => '080-8901-2345', 'gender' => 'Male', 'subject_id' => 81, 'school_id' => 27],

            // Teachers for Ashford Academy
            ['name' => 'Lelouch Lamperouge', 'email' => 'lelouch@ashford.ac.jp', 'phone' => '080-9012-3456', 'gender' => 'Male', 'subject_id' => 82, 'school_id' => 28],
            ['name' => 'C.C.', 'email' => 'cc@ashford.ac.jp', 'phone' => '080-0123-4567', 'gender' => 'Female', 'subject_id' => 83, 'school_id' => 28],
            ['name' => 'Suzaku Kururugi', 'email' => 'suzaku@ashford.ac.jp', 'phone' => '080-1234-5678', 'gender' => 'Male', 'subject_id' => 84, 'school_id' => 28],

            // Teachers for Fuuka Academy
            ['name' => 'Kazuya Yashiro', 'email' => 'kazuya@fuuka.ac.jp', 'phone' => '080-2345-6789', 'gender' => 'Male', 'subject_id' => 85, 'school_id' => 29],
            ['name' => 'Kokomi Teruhashi', 'email' => 'kokomi@fuuka.ac.jp', 'phone' => '080-3456-7890', 'gender' => 'Female', 'subject_id' => 86, 'school_id' => 29],
            ['name' => 'Ayaka Yukihira', 'email' => 'ayaka@fuuka.ac.jp', 'phone' => '080-4567-8901', 'gender' => 'Female', 'subject_id' => 87, 'school_id' => 29],

            // Teachers for Sanada North High School
            ['name' => 'Sanada Yukimura', 'email' => 'yukimura@sanada.ac.jp', 'phone' => '080-5678-9012', 'gender' => 'Male', 'subject_id' => 88, 'school_id' => 30],
            ['name' => 'Nobuyuki Sanada', 'email' => 'nobuyuki@sanada.ac.jp', 'phone' => '080-6789-0123', 'gender' => 'Male', 'subject_id' => 89, 'school_id' => 30],
            ['name' => 'Masayuki Sanada', 'email' => 'masayuki@sanada.ac.jp', 'phone' => '080-7890-1234', 'gender' => 'Male', 'subject_id' => 90, 'school_id' => 30],

            // Teachers for Inaba Municipal High School
            ['name' => 'Hikigaya Hachiman', 'email' => 'hikigaya@inaba.ac.jp', 'phone' => '080-8901-2345', 'gender' => 'Male', 'subject_id' => 91, 'school_id' => 31],
            ['name' => 'Yui Yuigahama', 'email' => 'yui@inaba.ac.jp', 'phone' => '080-9012-3456', 'gender' => 'Female', 'subject_id' => 92, 'school_id' => 31],
            ['name' => 'Iroha Isshiki', 'email' => 'iroha@inaba.ac.jp', 'phone' => '080-0123-4567', 'gender' => 'Female', 'subject_id' => 93, 'school_id' => 31],
        ];

        foreach ($teachers as $teacher) {
            DB::table('teachers')->insert([
                'name' => $teacher['name'],
                'teacher-token' => mt_rand(100000, 999999),
                'email' => $teacher['email'],
                'phone' => $teacher['phone'],
                'gender' => $teacher['gender'],
                'image-url' => "images/dummy/teacher/" . $teacher['name'] . ".png",
                'subject_id' => $teacher['subject_id'],
                'school_id' => $teacher['school_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}