<?php

use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'product_name' => '作品名001',
            'product_cap' => '作品名001の説明。イラスト',
            'product_user_id' => '1',
            'product_pub_flg' => '0',
            'product_del_flg' => '1',
            ],[
            'product_name' => '作品名001型染',
            'product_cap' => '作品名001の説明。色糊型染',
            'product_user_id' => '2',
            'product_pub_flg' => '0',
            'product_del_flg' => '1',
            ],[
            'product_name' => '作品名002',
            'product_cap' => '作品名002の説明。シルクスクリーン',
            'product_user_id' => '2',
            'product_pub_flg' => '0',
            'product_del_flg' => '1',
            ],[
            'product_name' => '作品名001',
            'product_cap' => '作品名001の説明。デッサン',
            'product_user_id' => '3',
            'product_pub_flg' => '0',
            'product_del_flg' => '1',
            ],
        ]);
    }
}
