<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            // Students for Konoha Academy
            ['name' => 'Naruto Uzumaki', 'email' => 'naruto@konohaacademy.com', 'phone' => '090-1234-5678', 'gender' => 'Male', 'class_id' => 1],
            ['name' => 'Sakura Haruno', 'email' => 'sakura@konohaacademy.com', 'phone' => '090-2345-6789', 'gender' => 'Female', 'class_id' => 1],
            ['name' => 'Sasuke Uchiha', 'email' => 'sasuke@konohaacademy.com', 'phone' => '090-3456-7890', 'gender' => 'Male', 'class_id' => 1],

            ['name' => 'Choji Akimichi', 'email' => 'choji@konohaacademy.com', 'phone' => '090-4567-8901', 'gender' => 'Male', 'class_id' => 2],
            ['name' => 'Shikamaru Nara', 'email' => 'shikamaru@konohaacademy.com', 'phone' => '090-5678-9012', 'gender' => 'Male', 'class_id' => 2],
            ['name' => 'Ino Yamanaka', 'email' => 'ino@konohaacademy.com', 'phone' => '090-6789-0123', 'gender' => 'Female', 'class_id' => 2],

            // Students for U.A. High School
            ['name' => 'Izuku Midoriya', 'email' => 'izuku@uahighschool.com', 'phone' => '080-1234-5678', 'gender' => 'Male', 'class_id' => 3],
            ['name' => 'Ochaco Uraraka', 'email' => 'ochaco@uahighschool.com', 'phone' => '080-2345-6789', 'gender' => 'Female', 'class_id' => 3],
            ['name' => 'Katsuki Bakugo', 'email' => 'katsuki@uahighschool.com', 'phone' => '080-3456-7890', 'gender' => 'Male', 'class_id' => 3],

            ['name' => 'Todoroki Shoto', 'email' => 'todoroki@uahighschool.com', 'phone' => '080-4567-8901', 'gender' => 'Male', 'class_id' => 4],
            ['name' => 'Momo Yaoyorozu', 'email' => 'momo@uahighschool.com', 'phone' => '080-5678-9012', 'gender' => 'Female', 'class_id' => 4],
            ['name' => 'Denki Kaminari', 'email' => 'denki@uahighschool.com', 'phone' => '080-6789-0123', 'gender' => 'Male', 'class_id' => 4],

            // Students for Ouran Academy
            ['name' => 'Haruhi Fujioka', 'email' => 'haruhi@ouranacademy.com', 'phone' => '070-1234-5678', 'gender' => 'Female', 'class_id' => 5],
            ['name' => 'Tamaki Suoh', 'email' => 'tamaki@ouranacademy.com', 'phone' => '070-2345-6789', 'gender' => 'Male', 'class_id' => 5],
            ['name' => 'Kyoya Ootori', 'email' => 'kyoya@ouranacademy.com', 'phone' => '070-3456-7890', 'gender' => 'Male', 'class_id' => 5],

            ['name' => 'Hikaru Hitachiin', 'email' => 'hikaru@ouranacademy.com', 'phone' => '070-4567-8901', 'gender' => 'Male', 'class_id' => 6],
            ['name' => 'Kaoru Hitachiin', 'email' => 'kaoru@ouranacademy.com', 'phone' => '070-5678-9012', 'gender' => 'Male', 'class_id' => 6],
            ['name' => 'Mitsukuni Haninozuka', 'email' => 'mitsukuni@ouranacademy.com', 'phone' => '070-6789-0123', 'gender' => 'Male', 'class_id' => 6],

            // Students for Honnouji Academy
            ['name' => 'Ryuuko Matoi', 'email' => 'ryuuko@honnoujiacademy.com', 'phone' => '060-1234-5678', 'gender' => 'Female', 'class_id' => 7],
            ['name' => 'Satsuki Kiryuin', 'email' => 'satsuki@honnoujiacademy.com', 'phone' => '060-2345-6789', 'gender' => 'Female', 'class_id' => 7],
            ['name' => 'Mako Mankanshoku', 'email' => 'mako@honnoujiacademy.com', 'phone' => '060-3456-7890', 'gender' => 'Female', 'class_id' => 7],

            ['name' => 'Iori Kida', 'email' => 'iori@honnoujiacademy.com', 'phone' => '060-4567-8901', 'gender' => 'Male', 'class_id' => 8],
            ['name' => 'Shizuo Heiwajima', 'email' => 'shizuo@honnoujiacademy.com', 'phone' => '060-5678-9012', 'gender' => 'Male', 'class_id' => 8],
            ['name' => 'Celty Sturluson', 'email' => 'celty@honnoujiacademy.com', 'phone' => '060-6789-0123', 'gender' => 'Female', 'class_id' => 8],

            // Students for Death Weapon Meister Academy
            ['name' => 'Maka Albarn', 'email' => 'maka@deathweaponacademy.com', 'phone' => '050-1234-5678', 'gender' => 'Female', 'class_id' => 9],
            ['name' => 'Soul Eater', 'email' => 'soul@deathweaponacademy.com', 'phone' => '050-2345-6789', 'gender' => 'Male', 'class_id' => 9],
            ['name' => 'Black☆Star', 'email' => 'blackstar@deathweaponacademy.com', 'phone' => '050-3456-7890', 'gender' => 'Male', 'class_id' => 9],

            ['name' => 'Tsubaki Nakatsukasa', 'email' => 'tsubaki@deathweaponacademy.com', 'phone' => '050-4567-8901', 'gender' => 'Female', 'class_id' => 10],
            ['name' => 'Liz Thompson', 'email' => 'liz@deathweaponacademy.com', 'phone' => '050-5678-9012', 'gender' => 'Female', 'class_id' => 10],
            ['name' => 'Patty Thompson', 'email' => 'patty@deathweaponacademy.com', 'phone' => '050-6789-0123', 'gender' => 'Female', 'class_id' => 10],

            // Students for Tenbi Academy
            ['name' => 'Lala Satalin Deviluke', 'email' => 'lala@tenbiacademy.com', 'phone' => '040-1234-5678', 'gender' => 'Female', 'class_id' => 11],
            ['name' => 'Momo Belia Deviluke', 'email' => 'momo@tenbiacademy.com', 'phone' => '040-2345-6789', 'gender' => 'Female', 'class_id' => 11],
            ['name' => 'Yami (Aoi Kizuna)', 'email' => 'yami@tenbiacademy.com', 'phone' => '040-3456-7890', 'gender' => 'Female', 'class_id' => 11],

            ['name' => 'Rito Yuuki', 'email' => 'rito@tenbiacademy.com', 'phone' => '040-4567-8901', 'gender' => 'Male', 'class_id' => 12],
            ['name' => 'Zastin', 'email' => 'zastin@tenbiacademy.com', 'phone' => '040-5678-9012', 'gender' => 'Male', 'class_id' => 12],
            ['name' => 'Celine', 'email' => 'celine@tenbiacademy.com', 'phone' => '040-6789-0123', 'gender' => 'Female', 'class_id' => 12],

            // Students for Kuoh Academy
            ['name' => 'Issei Hyoudou', 'email' => 'issei@kuohacademy.com', 'phone' => '030-1234-5678', 'gender' => 'Male', 'class_id' => 13],
            ['name' => 'Rias Gremory', 'email' => 'rias@kuohacademy.com', 'phone' => '030-2345-6789', 'gender' => 'Female', 'class_id' => 13],
            ['name' => 'Akeno Himejima', 'email' => 'akeno@kuohacademy.com', 'phone' => '030-3456-7890', 'gender' => 'Female', 'class_id' => 13],

            ['name' => 'Kiba Yuuto', 'email' => 'kiba@kuohacademy.com', 'phone' => '030-4567-8901', 'gender' => 'Male', 'class_id' => 14],
            ['name' => 'Koneko Toujou', 'email' => 'koneko@kuohacademy.com', 'phone' => '030-5678-9012', 'gender' => 'Female', 'class_id' => 14],
            ['name' => 'Xenovia Quarta', 'email' => 'xenovia@kuohacademy.com', 'phone' => '030-6789-0123', 'gender' => 'Female', 'class_id' => 14],

            // Students for Yokai Academy
            ['name' => 'Tsukune Aono', 'email' => 'tsukune@yokaiacademy.com', 'phone' => '020-1234-5678', 'gender' => 'Male', 'class_id' => 15],
            ['name' => 'Moka Akashiya', 'email' => 'moka@yokaiacademy.com', 'phone' => '020-2345-6789', 'gender' => 'Female', 'class_id' => 15],
            ['name' => 'Kurumu Kurono', 'email' => 'kurumu@yokaiacademy.com', 'phone' => '020-3456-7890', 'gender' => 'Female', 'class_id' => 15],

            ['name' => 'Ruby Tojo', 'email' => 'ruby@yokaiacademy.com', 'phone' => '020-4567-8901', 'gender' => 'Female', 'class_id' => 16],
            ['name' => 'Ginbei', 'email' => 'ginbei@yokaiacademy.com', 'phone' => '020-5678-9012', 'gender' => 'Male', 'class_id' => 16],
            ['name' => 'Rika', 'email' => 'rika@yokaiacademy.com', 'phone' => '020-6789-0123', 'gender' => 'Female', 'class_id' => 16],

            // Students for Shuchiin Academy
            ['name' => 'Kaguya Shinomiya', 'email' => 'kaguya@shuchiinacademy.com', 'phone' => '010-1234-5678', 'gender' => 'Female', 'class_id' => 17],
            ['name' => 'Miyuki Shirogane', 'email' => 'miyuki@shuchiinacademy.com', 'phone' => '010-2345-6789', 'gender' => 'Male', 'class_id' => 17],
            ['name' => 'Chika Fujiwara', 'email' => 'chika@shuchiinacademy.com', 'phone' => '010-3456-7890', 'gender' => 'Female', 'class_id' => 17],

            ['name' => 'Yu Ishigami', 'email' => 'yu@shuchiinacademy.com', 'phone' => '010-4567-8901', 'gender' => 'Male', 'class_id' => 18],
            ['name' => 'Ai Hayasaka', 'email' => 'ai@shuchiinacademy.com', 'phone' => '010-5678-9012', 'gender' => 'Female', 'class_id' => 18],
            ['name' => 'Riko Yashiro', 'email' => 'riko@shuchiinacademy.com', 'phone' => '010-6789-0123', 'gender' => 'Female', 'class_id' => 18],

            // Students for Seirin High School
            ['name' => 'Taiga Kagami', 'email' => 'taiga@seirinhighschool.com', 'phone' => '090-1234-5678', 'gender' => 'Male', 'class_id' => 19],
            ['name' => 'Kuroko Tetsuya', 'email' => 'kuroko@seirinhighschool.com', 'phone' => '090-2345-6789', 'gender' => 'Male', 'class_id' => 19],
            ['name' => 'Riko Aida', 'email' => 'riko@seirinhighschool.com', 'phone' => '090-3456-7890', 'gender' => 'Female', 'class_id' => 19],

            ['name' => 'Aomine Daiki', 'email' => 'aomine@seirinhighschool.com', 'phone' => '090-4567-8901', 'gender' => 'Male', 'class_id' => 20],
            ['name' => 'Murasakibara Atsushi', 'email' => 'murasakibara@seirinhighschool.com', 'phone' => '090-5678-9012', 'gender' => 'Male', 'class_id' => 20],
            ['name' => 'Kise Ryouta', 'email' => 'kise@seirinhighschool.com', 'phone' => '090-6789-0123', 'gender' => 'Male', 'class_id' => 20],

            // Students for Sakuragaoka High School
            ['name' => 'K-On!', 'email' => 'k-on@sakuragaokahighschool.com', 'phone' => '080-1234-5678', 'gender' => 'Female', 'class_id' => 21],
            ['name' => 'Yui Hirasawa', 'email' => 'yui@sakuragaokahighschool.com', 'phone' => '080-2345-6789', 'gender' => 'Female', 'class_id' => 21],
            ['name' => 'Mio Akiyama', 'email' => 'mio@sakuragaokahighschool.com', 'phone' => '080-3456-7890', 'gender' => 'Female', 'class_id' => 21],

            ['name' => 'Ritsu Tainaka', 'email' => 'ritsu@sakuragaokahighschool.com', 'phone' => '080-4567-8901', 'gender' => 'Female', 'class_id' => 22],
            ['name' => 'Azusa Nakano', 'email' => 'azusa@sakuragaokahighschool.com', 'phone' => '080-5678-9012', 'gender' => 'Female', 'class_id' => 22],
            ['name' => 'Jun Suzuki', 'email' => 'jun@sakuragaokahighschool.com', 'phone' => '080-6789-0123', 'gender' => 'Female', 'class_id' => 22],

            // Students for Karasuno High School
            ['name' => 'Hinata Shoyo', 'email' => 'hinata@karasunohighschool.com', 'phone' => '070-1234-5678', 'gender' => 'Male', 'class_id' => 23],
            ['name' => 'Kageyama Tobio', 'email' => 'kageyama@karasunohighschool.com', 'phone' => '070-2345-6789', 'gender' => 'Male', 'class_id' => 23],
            ['name' => 'Yamaguchi Tadashi', 'email' => 'yamaguchi@karasunohighschool.com', 'phone' => '070-3456-7890', 'gender' => 'Male', 'class_id' => 23],

            ['name' => 'Tsukishima Kei', 'email' => 'tsukishima@karasunohighschool.com', 'phone' => '070-4567-8901', 'gender' => 'Male', 'class_id' => 24],
            ['name' => 'Nishinoya Yuu', 'email' => 'nishinoya@karasunohighschool.com', 'phone' => '070-5678-9012', 'gender' => 'Male', 'class_id' => 24],
            ['name' => 'Asahi Azumane', 'email' => 'asahi@karasunohighschool.com', 'phone' => '070-6789-0123', 'gender' => 'Male', 'class_id' => 24],

            // Students for Ninja Academy
            ['name' => 'Kakashi Hatake', 'email' => 'kakashi@ninjaacademy.com', 'phone' => '060-1234-5678', 'gender' => 'Male', 'class_id' => 25],
            ['name' => 'Might Guy', 'email' => 'guy@ninjaacademy.com', 'phone' => '060-2345-6789', 'gender' => 'Male', 'class_id' => 25],
            ['name' => 'Tenten', 'email' => 'tenten@ninjaacademy.com', 'phone' => '060-3456-7890', 'gender' => 'Female', 'class_id' => 25],

            ['name' => 'Neji Hyuga', 'email' => 'neji@ninjaacademy.com', 'phone' => '060-4567-8901', 'gender' => 'Male', 'class_id' => 26],
            ['name' => 'Hinata Hyuga', 'email' => 'hinata@ninjaacademy.com', 'phone' => '060-5678-9012', 'gender' => 'Female', 'class_id' => 26],
            ['name' => 'Lee Rock', 'email' => 'rocklee@ninjaacademy.com', 'phone' => '060-6789-0123', 'gender' => 'Male', 'class_id' => 26],
        
            // Rikkaidai Fuzoku
            ['name' => 'Ryoji Suguro', 'email' => 'ryoji.suguro@rikkadai.com', 'phone' => '080-1234-5678', 'gender' => 'Male', 'class_id' => 27],
            ['name' => 'Rina Shima', 'email' => 'rina.shima@rikkadai.com', 'phone' => '080-2345-6789', 'gender' => 'Female', 'class_id' => 27],
            ['name' => 'Haruichi Furudate', 'email' => 'haruichi.furudate@rikkadai.com', 'phone' => '080-3456-7890', 'gender' => 'Male', 'class_id' => 27],

            ['name' => 'Mai Shiranui', 'email' => 'mai.shiranui@rikkadai.com', 'phone' => '080-4567-8901', 'gender' => 'Female', 'class_id' => 28],
            ['name' => 'Kaito Yagami', 'email' => 'kaito.yagami@rikkadai.com', 'phone' => '080-5678-9012', 'gender' => 'Male', 'class_id' => 28],
            ['name' => 'Hanae Tokuchi', 'email' => 'hanae.tokuchi@rikkadai.com', 'phone' => '080-6789-0123', 'gender' => 'Female', 'class_id' => 28],

            // Aldera Junior High
            ['name' => 'Aoi Yamamoto', 'email' => 'aoi.yamamoto@aldera.com', 'phone' => '080-7890-1234', 'gender' => 'Female', 'class_id' => 29],
            ['name' => 'Taro Yamada', 'email' => 'taro.yamada@aldera.com', 'phone' => '080-8901-2345', 'gender' => 'Male', 'class_id' => 29],
            ['name' => 'Yuki Tanaka', 'email' => 'yuki.tanaka@aldera.com', 'phone' => '080-9012-3456', 'gender' => 'Female', 'class_id' => 29],

            ['name' => 'Kenji Suzuki', 'email' => 'kenji.suzuki@aldera.com', 'phone' => '080-0123-4567', 'gender' => 'Male', 'class_id' => 30],
            ['name' => 'Rika Ito', 'email' => 'rika.ito@aldera.com', 'phone' => '080-1234-5678', 'gender' => 'Female', 'class_id' => 30],
            ['name' => 'Shinya Nakamura', 'email' => 'shinya.nakamura@aldera.com', 'phone' => '080-2345-6789', 'gender' => 'Male', 'class_id' => 30],

            // Cross Academy
            ['name' => 'Kaname Kuran', 'email' => 'kaname.kuran@cross.com', 'phone' => '080-3456-7890', 'gender' => 'Male', 'class_id' => 31],
            ['name' => 'Yūki Cross', 'email' => 'yuki.cross@cross.com', 'phone' => '080-4567-8901', 'gender' => 'Female', 'class_id' => 31],
            ['name' => 'Zero Kiryu', 'email' => 'zero.kiryu@cross.com', 'phone' => '080-5678-9012', 'gender' => 'Male', 'class_id' => 31],

            ['name' => 'Ichiru Kiryu', 'email' => 'ichiru.kiryu@cross.com', 'phone' => '080-6789-0123', 'gender' => 'Male', 'class_id' => 32],
            ['name' => 'Rima Toya', 'email' => 'rima.toya@cross.com', 'phone' => '080-7890-1234', 'gender' => 'Female', 'class_id' => 32],
            ['name' => 'Shizuka Hio', 'email' => 'shizuka.hio@cross.com', 'phone' => '080-8901-2345', 'gender' => 'Female', 'class_id' => 32],

            // True Cross Academy
            ['name' => 'Rin Okumura', 'email' => 'rin.okumura@cross.com', 'phone' => '080-9012-3456', 'gender' => 'Male', 'class_id' => 33],
            ['name' => 'Yukio Okumura', 'email' => 'yukio.okumura@cross.com', 'phone' => '080-0123-4567', 'gender' => 'Male', 'class_id' => 33],
            ['name' => 'Shiemi Moriyama', 'email' => 'shiemi.moriyama@cross.com', 'phone' => '080-1234-5678', 'gender' => 'Female', 'class_id' => 33],

            ['name' => 'Konekomaru Miwa', 'email' => 'konekomaru.miwa@cross.com', 'phone' => '080-2345-6789', 'gender' => 'Male', 'class_id' => 34],
            ['name' => 'Izumo Kamiki', 'email' => 'izumo.kamiki@cross.com', 'phone' => '080-3456-7890', 'gender' => 'Female', 'class_id' => 34],
            ['name' => 'Ryuji Suguro', 'email' => 'ryuji.suguro@cross.com', 'phone' => '080-4567-8901', 'gender' => 'Male', 'class_id' => 34],

            // Starlight Academy
            ['name' => 'Kairi Amamiya', 'email' => 'kairi.amamiya@starlight.com', 'phone' => '080-5678-9012', 'gender' => 'Female', 'class_id' => 35],
            ['name' => 'Hikari Aizawa', 'email' => 'hikari.aizawa@starlight.com', 'phone' => '080-6789-0123', 'gender' => 'Female', 'class_id' => 35],
            ['name' => 'Ryohei Shiraishi', 'email' => 'ryohei.shiraishi@starlight.com', 'phone' => '080-7890-1234', 'gender' => 'Male', 'class_id' => 35],

            ['name' => 'Saki Koyama', 'email' => 'saki.koyama@starlight.com', 'phone' => '080-8901-2345', 'gender' => 'Female', 'class_id' => 36],
            ['name' => 'Tsubasa Kaname', 'email' => 'tsubasa.kaname@starlight.com', 'phone' => '080-9012-3456', 'gender' => 'Male', 'class_id' => 36],
            ['name' => 'Mio Inoue', 'email' => 'mio.inoue@starlight.com', 'phone' => '080-0123-4567', 'gender' => 'Female', 'class_id' => 36],

            // Amakusa High School
            ['name' => 'Shinichi Naka', 'email' => 'shinichi.naka@amakusa.com', 'phone' => '080-1234-5678', 'gender' => 'Male', 'class_id' => 37],
            ['name' => 'Natsuki Takeda', 'email' => 'natsuki.takeda@amakusa.com', 'phone' => '080-2345-6789', 'gender' => 'Female', 'class_id' => 37],
            ['name' => 'Yumi Nakamura', 'email' => 'yumi.nakamura@amakusa.com', 'phone' => '080-3456-7890', 'gender' => 'Female', 'class_id' => 37],

            ['name' => 'Kazuya Murakami', 'email' => 'kazuya.murakami@amakusa.com', 'phone' => '080-4567-8901', 'gender' => 'Male', 'class_id' => 38],
            ['name' => 'Akira Kitamura', 'email' => 'akira.kitamura@amakusa.com', 'phone' => '080-5678-9012', 'gender' => 'Male', 'class_id' => 38],
            ['name' => 'Mikae Mori', 'email' => 'mikae.mori@amakusa.com', 'phone' => '080-6789-0123', 'gender' => 'Female', 'class_id' => 38],

            // Hakoniwa Academy
            ['name' => 'Eiji Matsuda', 'email' => 'eiji.matsuda@hakoniwa.com', 'phone' => '080-7890-1234', 'gender' => 'Male', 'class_id' => 39],
            ['name' => 'Fumiya Yamazaki', 'email' => 'fumiya.yamazaki@hakoniwa.com', 'phone' => '080-8901-2345', 'gender' => 'Male', 'class_id' => 39],
            ['name' => 'Mio Takahashi', 'email' => 'mio.takahashi@hakoniwa.com', 'phone' => '080-9012-3456', 'gender' => 'Female', 'class_id' => 39],

            ['name' => 'Yuka Saito', 'email' => 'yuka.saito@hakoniwa.com', 'phone' => '080-0123-4567', 'gender' => 'Female', 'class_id' => 40],
            ['name' => 'Koichi Nakano', 'email' => 'koichi.nakano@hakoniwa.com', 'phone' => '080-1234-5678', 'gender' => 'Male', 'class_id' => 40],
            ['name' => 'Akane Fujimoto', 'email' => 'akane.fujimoto@hakoniwa.com', 'phone' => '080-2345-6789', 'gender' => 'Female', 'class_id' => 40],

            // Kisaragi Academy
            ['name' => 'Ryuto Shiba', 'email' => 'ryuto.shiba@kisari.com', 'phone' => '080-3456-7890', 'gender' => 'Male', 'class_id' => 41],
            ['name' => 'Nanae Kanai', 'email' => 'nanae.kanai@kisari.com', 'phone' => '080-4567-8901', 'gender' => 'Female', 'class_id' => 41],
            ['name' => 'Sora Takeda', 'email' => 'sora.takeda@kisari.com', 'phone' => '080-5678-9012', 'gender' => 'Male', 'class_id' => 41],

            ['name' => 'Rika Hoshino', 'email' => 'rika.hoshino@kisari.com', 'phone' => '080-6789-0123', 'gender' => 'Female', 'class_id' => 42],
            ['name' => 'Kaito Fujita', 'email' => 'kaito.fujita@kisari.com', 'phone' => '080-7890-1234', 'gender' => 'Male', 'class_id' => 42],
            ['name' => 'Aoi Mizuho', 'email' => 'aoi.mizuho@kisari.com', 'phone' => '080-8901-2345', 'gender' => 'Female', 'class_id' => 42],

            // Totsuki Culinary Academy
            ['name' => 'Sōma Yukihira', 'email' => 'soma.yukihira@totsuki.com', 'phone' => '080-9012-3456', 'gender' => 'Male', 'class_id' => 43],
            ['name' => 'Erina Nakiri', 'email' => 'erina.nakiri@totsuki.com', 'phone' => '080-0123-4567', 'gender' => 'Female', 'class_id' => 43],
            ['name' => 'Megumi Tadokoro', 'email' => 'megumi.tadokoro@totsuki.com', 'phone' => '080-1234-5678', 'gender' => 'Female', 'class_id' => 43],

            ['name' => 'Takumi Aldini', 'email' => 'takumi.aldini@totsuki.com', 'phone' => '080-2345-6789', 'gender' => 'Male', 'class_id' => 44],
            ['name' => 'Alice Nakiri', 'email' => 'alice.nakiri@totsuki.com', 'phone' => '080-3456-7890', 'gender' => 'Female', 'class_id' => 44],
            ['name' => 'Ryo Kurokiba', 'email' => 'ryo.kurokiba@totsuki.com', 'phone' => '080-4567-8901', 'gender' => 'Male', 'class_id' => 44],

            // Mahora Academy
            ['name' => 'Nagi Springfield', 'email' => 'nagi.springfield@mahora.com', 'phone' => '080-5678-9012', 'gender' => 'Female', 'class_id' => 45],
            ['name' => 'Negi Springfield', 'email' => 'negi.springfield@mahora.com', 'phone' => '080-6789-0123', 'gender' => 'Male', 'class_id' => 45],
            ['name' => 'Asakura Yue', 'email' => 'asakura.yue@mahora.com', 'phone' => '080-7890-1234', 'gender' => 'Female', 'class_id' => 45],

            ['name' => 'Konoemon Sagura', 'email' => 'konoemon.sagura@mahora.com', 'phone' => '080-8901-2345', 'gender' => 'Male', 'class_id' => 46],
            ['name' => 'Konoka Konoe', 'email' => 'konoka.konoe@mahora.com', 'phone' => '080-9012-3456', 'gender' => 'Female', 'class_id' => 46],
            ['name' => 'Makie Sasaki', 'email' => 'makie.sasaki@mahora.com', 'phone' => '080-0146-4567', 'gender' => 'Female', 'class_id' => 46],

            // Nishi High School
            ['name' => 'Takumi Fuyuno', 'email' => 'takumi.fuyuno@nishi.com', 'phone' => '080-1234-5678', 'gender' => 'Male', 'class_id' => 47],
            ['name' => 'Mio Kaneko', 'email' => 'mio.kaneko@nishi.com', 'phone' => '080-2345-6789', 'gender' => 'Female', 'class_id' => 47],
            ['name' => 'Ryoichi Nakata', 'email' => 'ryoichi.nakata@nishi.com', 'phone' => '080-3456-7890', 'gender' => 'Male', 'class_id' => 47],

            ['name' => 'Akiho Satou', 'email' => 'akiho.satou@nishi.com', 'phone' => '080-4567-8901', 'gender' => 'Female', 'class_id' => 48],
            ['name' => 'Kazuya Mori', 'email' => 'kazuya.mori@nishi.com', 'phone' => '080-5678-9012', 'gender' => 'Male', 'class_id' => 48],
            ['name' => 'Rei Yoshida', 'email' => 'rei.yoshida@nishi.com', 'phone' => '080-6789-0123', 'gender' => 'Female', 'class_id' => 48],

            // Otonokizaka High School
            ['name' => 'Honoka Kosaka', 'email' => 'honoka.kosaka@otonokizaka.com', 'phone' => '080-7890-1234', 'gender' => 'Female', 'class_id' => 49],
            ['name' => 'Umi Sonoda', 'email' => 'umi.sonoda@otonokizaka.com', 'phone' => '080-8901-2345', 'gender' => 'Female', 'class_id' => 49],
            ['name' => 'Kotori Minami', 'email' => 'kotori.minami@otonokizaka.com', 'phone' => '080-9012-3456', 'gender' => 'Female', 'class_id' => 49],

            ['name' => 'Maki Nishikino', 'email' => 'maki.nishikino@otonokizaka.com', 'phone' => '080-0123-4567', 'gender' => 'Female', 'class_id' => 50],
            ['name' => 'Eli Ayase', 'email' => 'eli.ayase@otonokizaka.com', 'phone' => '080-1234-5678', 'gender' => 'Female', 'class_id' => 50],
            ['name' => 'Nico Yazawa', 'email' => 'nico.yazawa@otonokizaka.com', 'phone' => '080-2345-6789', 'gender' => 'Female', 'class_id' => 50],
        
            // Kamiyama High School classes
            ['name' => 'Haruka Nakamura', 'email' => 'haruka.nakamura@kamiyama.edu.jp', 'phone' => '080-1234-5678', 'gender' => 'Female', 'class_id' => 51],
            ['name' => 'Takumi Sato', 'email' => 'takumi.sato@kamiyama.edu.jp', 'phone' => '080-2345-6789', 'gender' => 'Male', 'class_id' => 51],
            ['name' => 'Yuki Tanaka', 'email' => 'yuki.tanaka@kamiyama.edu.jp', 'phone' => '080-3456-7890', 'gender' => 'Female', 'class_id' => 51],

            ['name' => 'Kenji Yamada', 'email' => 'kenji.yamada@kamiyama.edu.jp', 'phone' => '080-4567-8901', 'gender' => 'Male', 'class_id' => 52],
            ['name' => 'Mika Suzuki', 'email' => 'mika.suzuki@kamiyama.edu.jp', 'phone' => '080-5678-9012', 'gender' => 'Female', 'class_id' => 52],
            ['name' => 'Ryoji Matsumoto', 'email' => 'ryoji.matsumoto@kamiyama.edu.jp', 'phone' => '080-6789-0123', 'gender' => 'Male', 'class_id' => 52],

            // Meiou High School classes
            ['name' => 'Aoi Sato', 'email' => 'aoi.sato@meiou.edu.jp', 'phone' => '080-7890-1234', 'gender' => 'Female', 'class_id' => 53],
            ['name' => 'Hiroshi Takeda', 'email' => 'hiroshi.takeda@meiou.edu.jp', 'phone' => '080-8901-2345', 'gender' => 'Male', 'class_id' => 53],
            ['name' => 'Sakura Ishikawa', 'email' => 'sakura.ishikawa@meiou.edu.jp', 'phone' => '080-9012-3456', 'gender' => 'Female', 'class_id' => 53],

            ['name' => 'Kazuhiro Nakamura', 'email' => 'kazuhiro.nakamura@meiou.edu.jp', 'phone' => '080-0123-4567', 'gender' => 'Male', 'class_id' => 54],
            ['name' => 'Yumi Kojima', 'email' => 'yumi.kojima@meiou.edu.jp', 'phone' => '080-1234-5678', 'gender' => 'Female', 'class_id' => 54],
            ['name' => 'Taro Yoshida', 'email' => 'taro.yoshida@meiou.edu.jp', 'phone' => '080-2345-6789', 'gender' => 'Male', 'class_id' => 54],

            // Ashford Academy classes
            ['name' => 'Satoshi Kondo', 'email' => 'satoshi.kondo@ashford.edu.jp', 'phone' => '080-3456-7890', 'gender' => 'Male', 'class_id' => 55],
            ['name' => 'Nao Kuroda', 'email' => 'nao.kuroda@ashford.edu.jp', 'phone' => '080-4567-8901', 'gender' => 'Female', 'class_id' => 55],
            ['name' => 'Hikaru Fujimoto', 'email' => 'hikaru.fujimoto@ashford.edu.jp', 'phone' => '080-5678-9012', 'gender' => 'Male', 'class_id' => 55],

            ['name' => 'Rina Yamada', 'email' => 'rina.yamada@ashford.edu.jp', 'phone' => '080-6789-0123', 'gender' => 'Female', 'class_id' => 56],
            ['name' => 'Yuuto Sakurai', 'email' => 'yuuto.sakurai@ashford.edu.jp', 'phone' => '080-7890-1234', 'gender' => 'Male', 'class_id' => 56],
            ['name' => 'Emi Tanaka', 'email' => 'emi.tanaka@ashford.edu.jp', 'phone' => '080-8901-2345', 'gender' => 'Female', 'class_id' => 56],

            // Fuuka Academy classes
            ['name' => 'Shinji Watanabe', 'email' => 'shinji.watanabe@fuuka.edu.jp', 'phone' => '080-9012-3456', 'gender' => 'Male', 'class_id' => 57],
            ['name' => 'Aya Nakamura', 'email' => 'aya.nakamura@fuuka.edu.jp', 'phone' => '080-0123-4567', 'gender' => 'Female', 'class_id' => 57],
            ['name' => 'Ryo Nishida', 'email' => 'ryo.nishida@fuuka.edu.jp', 'phone' => '080-1234-5678', 'gender' => 'Male', 'class_id' => 57],

            ['name' => 'Hikaru Tanaka', 'email' => 'hikaru.tanaka@fuuka.edu.jp', 'phone' => '080-2345-6789', 'gender' => 'Male', 'class_id' => 58],
            ['name' => 'Miki Yamamoto', 'email' => 'miki.yamamoto@fuuka.edu.jp', 'phone' => '080-3456-7890', 'gender' => 'Female', 'class_id' => 58],
            ['name' => 'Taro Suzuki', 'email' => 'taro.suzuki@fuuka.edu.jp', 'phone' => '080-4567-8901', 'gender' => 'Male', 'class_id' => 58],
            
            // Sanada North High School classes
            ['name' => 'Mio Kato', 'email' => 'mio.kato@sanada.edu.jp', 'phone' => '080-2345-6789', 'gender' => 'Female', 'class_id' => 59],
            ['name' => 'Kenta Matsuda', 'email' => 'kenta.matsuda@sanada.edu.jp', 'phone' => '080-3456-7890', 'gender' => 'Male', 'class_id' => 59],
            ['name' => 'Nana Suzuki', 'email' => 'nana.suzuki@sanada.edu.jp', 'phone' => '080-4567-8901', 'gender' => 'Female', 'class_id' => 59],

            ['name' => 'Jiro Yamamoto', 'email' => 'jiro.yamamoto@sanada.edu.jp', 'phone' => '080-5678-9012', 'gender' => 'Male', 'class_id' => 60],
            ['name' => 'Hina Takahashi', 'email' => 'hina.takahashi@sanada.edu.jp', 'phone' => '080-6789-0123', 'gender' => 'Female', 'class_id' => 60],
            ['name' => 'Kazuya Kaneko', 'email' => 'kazuya.kaneko@sanada.edu.jp', 'phone' => '080-7890-1260', 'gender' => 'Male', 'class_id' => 60],

            // Inaba Municipal High School classes
            ['name' => 'Akira Mori', 'email' => 'akira.mori@inaba.edu.jp', 'phone' => '080-8901-2345', 'gender' => 'Male', 'class_id' => 61],
            ['name' => 'Saki Takeda', 'email' => 'saki.takeda@inaba.edu.jp', 'phone' => '080-9012-3456', 'gender' => 'Female', 'class_id' => 61],
            ['name' => 'Kaito Fujii', 'email' => 'kaito.fujii@inaba.edu.jp', 'phone' => '080-0123-4567', 'gender' => 'Male', 'class_id' => 61],

            ['name' => 'Riko Nakagawa', 'email' => 'riko.nakagawa@inaba.edu.jp', 'phone' => '080-1234-5678', 'gender' => 'Female', 'class_id' => 62],
            ['name' => 'Shouichi Matsumoto', 'email' => 'shouichi.matsumoto@inaba.edu.jp', 'phone' => '080-2345-6789', 'gender' => 'Male', 'class_id' => 62],
            ['name' => 'Mai Kuroda', 'email' => 'mai.kuroda@inaba.edu.jp', 'phone' => '080-3456-7890', 'gender' => 'Female', 'class_id' => 62],
        ];

        foreach ($students as $student) {
            DB::table('students')->insert([
                'name' => $student['name'],
                'email' => $student['email'],
                'phone' => $student['phone'],
                'gender' => $student['gender'],
                'image_url' => "images/dummy/student/" . $student['name'] . ".png",
                'class_id' => $student['class_id'],
                'student_token' => mt_rand(100000, 999999),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
