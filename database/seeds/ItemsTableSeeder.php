<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'farmer_id' => 100,
            'img' => 'sample.jpg',
            'name' => 'りんご',
            'price' => '1000円',
            'sipping_duration' => '3',
            'text' => '新鮮なりんごです。',
            'recipe' => 'そのまま食べるのがオススメです！',
            'area' => '青森県',
            'detail_img' => 'sample.jpg',
            'detail_prof' => 'りんごの味をそのまま楽しんで頂きたいと思っています',
        ];

        $param2 = [
            'id' => 100,
            'user_id' => 100,
            'name' => 'テスト農家',
            'prof' => 'りんご専門に栽培している農家です',
            'img' => 'sample.jpg',
            'detail_img' => 'sample.jpg',
            'detail_prof' => '無農薬で栽培しています',
        ];

        $param3 = [
            'id' => 100,
            'name' => 'テスト太郎',
            'email' => 'test@gmail.com',
            'password' => '99999999',
            'farmer_flg' => 1,
        ];

        DB::table('users')->insert($param3);
        DB::table('farmers')->insert($param2);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
    }
}
