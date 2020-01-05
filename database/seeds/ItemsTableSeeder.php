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
            'img' => 'https://4.imimg.com/data4/UB/WV/MY-32247465/fresh-red-apple-500x500.jpg',
            'name' => 'りんご',
            'price' => '1000円',
            'sipping_duration' => '3',
            'text' => '新鮮なりんごです。',
            'recipe' => 'そのまま食べるのがオススメです！',
            'area' => '青森県',
            'detail_img' => 'https://4.imimg.com/data4/UB/WV/MY-32247465/fresh-red-apple-500x500.jpg',
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

        $param4 = [
            'id' => 1,
            'user_id' => 1,
            'name' => 'りんご農家',
            'prof' => 'りんご栽培をしています',
            'img' => 'sample.jpg',
            'detail_img' => 'sample.jpg',
            'detail_prof' => '美味しいりんごを栽培しています',
        ];

        $param5 = [
            'farmer_id' => 1,
            'img' => 'https://4.imimg.com/data4/UB/WV/MY-32247465/fresh-red-apple-500x500.jpg',
            'name' => '美味しいりんご',
            'price' => '5000円',
            'sipping_duration' => '3',
            'text' => '新鮮なりんごです',
            'recipe' => 'そのまま食べるのがオススメです',
            'area' => '青森県',
            'detail_img' => 'https://4.imimg.com/data4/UB/WV/MY-32247465/fresh-red-apple-500x500.jpg',
            'detail_prof' => '無農薬で栽培しているこだわりのりんごです'
        ];

        DB::table('users')->insert($param3);
        DB::table('farmers')->insert($param2);
        DB::table('farmers')->insert($param4);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
        DB::table('items')->insert($param5);
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
        DB::table('items')->insert($param);
        DB::table('items')->insert($param);
    }
}
