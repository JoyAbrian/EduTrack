<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        $names = [
            // Generate 93 unique Japanese-style nicknames for users
            'Hiroshi Tanaka', 'Yuki Nakamura', 'Sakura Suzuki', 'Taro Yamada', 'Aiko Mori',
            'Kenta Sato', 'Aya Ito', 'Ryo Yamamoto', 'Mina Takahashi', 'Kenji Kobayashi',
            'Miyu Watanabe', 'Sho Nishida', 'Rina Tanaka', 'Daiki Fujimoto', 'Haruka Sato',
            'Yuto Yamazaki', 'Nana Matsumoto', 'Shinichi Nakajima', 'Eri Takeda', 'Koichi Inoue',
            'Asuka Hoshino', 'Ryota Tanaka', 'Mai Kimura', 'Shinya Shimizu', 'Riko Nakano',
            'Jiro Sato', 'Hina Yoshida', 'Takeshi Matsumura', 'Yuka Kawaguchi', 'Sosuke Inoue',
            'Akari Matsumoto', 'Hikaru Tanaka', 'Nao Kaneko', 'Kaito Suzuki', 'Yumi Tanaka',
            'Keiichi Nakagawa', 'Sora Watanabe', 'Ayumi Nakajima', 'Kazuya Hashimoto', 'Natsuki Oda',
            'Rei Tanaka', 'Yoshiko Saito', 'Makoto Nishida', 'Ami Yamaguchi', 'Shunichi Yamada',
            'Rieko Nakano', 'Tomoaki Takahashi', 'Mio Matsuda', 'Haruto Inoue', 'Yoko Murakami',
            'Shun Saito', 'Yoshimi Matsumoto', 'Kazuki Yamashita', 'Ayaka Nishimura', 'Takumi Fujii',
            'Rika Saito', 'Kazuhiro Takahashi', 'Rena Nakagawa', 'Yusuke Tanaka', 'Miki Yoshida',
            'Taichi Watanabe', 'Konomi Takeda', 'Yuto Sato', 'Yui Tanaka', 'Shinya Yamamoto',
            'Nozomi Matsumoto', 'Kenjiro Ishikawa', 'Kanna Nakamura', 'Hiroki Takahashi', 'Saki Tanaka',
            'Akira Nakajima', 'Nao Yamashita', 'Mika Kaneko', 'Shohei Yamaguchi', 'Risa Takahashi',
            'Tetsuya Nakamura', 'Miyuki Matsuda', 'Kota Tanaka', 'Mina Saito', 'Hiroto Watanabe',
            'Saki Nakagawa', 'Shou Takeda', 'Eri Matsumura', 'Hoshi Tanaka', 'Kouichi Nakamura',
            'Yumiko Nishida', 'Ryohei Sato', 'Nami Yoshida', 'Ryuto Takahashi', 'Aya Yamaguchi',
            'Daichi Yamamoto', 'Kana Saito', 'Yuuki Kaneko', 'Miho Takahashi', 'Haruki Watanabe'
        ];

        $schools = DB::table('schools')->pluck('id');

        foreach ($schools as $schoolId) {
            foreach (range(1, 3) as $index) {
                $name = array_shift($names);
                $role = $index === 1 ? 'admin' : 'user';

                DB::table('users')->insert([
                    'name' => $name,
                    'email' => Str::lower(Str::slug($name) . '@example.com'),
                    'school_id' => $schoolId,
                    'password' => bcrypt('password'),
                    'role' => $role,
                    'remember_token' => Str::random(10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}