<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_001.jpeg',
            'posts_name' => '工程1：型紙彫り',
            'posts_cap' => '型紙を図案に合わせて彫る',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],[
            'posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_002.jpeg',
            'posts_name' => '工程1：型紙彫り2',
            'posts_cap' => '型紙完成',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],[
            'posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_003.jpeg',
            'posts_name' => '工程2：紗張り',
            'posts_cap' => '型紙を補強するため紗というメッシュ状の布を張る',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],[
            'posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_004.jpeg',
            'posts_name' => '工程2：紗張り2',
            'posts_cap' => 'カシューを塗り、型紙と紗を接着する',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],[
            'posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_005.jpeg',
            'posts_name' => '工程2：紗張り3',
            'posts_cap' => '乾燥させる',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],[
            'posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_006.jpeg',
            'posts_name' => '工程2：紗張り4',
            'posts_cap' => '紗（メッシュ）に詰まった余分なカシューは落とす',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],[
            'posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_007.jpeg',
            'posts_name' => '工程3：染色',
            'posts_cap' => '型紙に色糊を置いていく',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],[
            'posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_008.jpeg',
            'posts_name' => '工程3：染色2',
            'posts_cap' => '型をずらして模様を作っていく',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],[
            'posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_009.jpeg',
            'posts_name' => '工程4：乾燥',
            'posts_cap' => 'しっかり乾燥させる',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],[
            'posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_010.jpeg',
            'posts_name' => '工程5：定着',
            'posts_cap' => '乾燥した染布に定着液を塗布し、１時間程度放置',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],[
            'posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_011.jpeg',
            'posts_name' => '工程6：水洗・ソーピング',
            'posts_cap' => '定着剤を洗い落とす、その後余分な染料を落とす',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]
            ,[
            'posts_products_id' => '2',
            'posts_img_path' => 'storage/images/IMG_012.jpeg',
            'posts_name' => '工程7：陰干し',
            'posts_cap' => '陰干しして染布を乾かす、乾いたら完成',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]
            ,[
            'posts_products_id' => '3',
            'posts_img_path' => 'storage/images/example001.jpeg',
            'posts_name' => '工程1：刷る',
            'posts_cap' => 'シルクスクリーン版の上からインクを刷る',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]
            ,[
            'posts_products_id' => '3',
            'posts_img_path' => 'storage/images/example002.jpeg',
            'posts_name' => '工程2：パターンを刷る',
            'posts_cap' => 'パターンをつなげていく',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]
            ,[
            'posts_products_id' => '1',
            'posts_img_path' => 'storage/images/kinmokusei.jpg',
            'posts_name' => '工程1：下書き',
            'posts_cap' => '下書き',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]
            ,[
            'posts_products_id' => '4',
            'posts_img_path' => 'storage/images/test001.jpg',
            'posts_name' => '工程1：スケッチ',
            'posts_cap' => 'スケッチする',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
