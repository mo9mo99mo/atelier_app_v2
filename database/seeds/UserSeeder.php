<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'testuser001',
            'email' => 'test001@mail.com',
            'password' => Hash::make('testtest'),
            'users_profile_txt' => 'testuser001です。よろしく。',
            'users_icon_path' => 'https://71d969be34a64a37b077d252637a5528.vfs.cloud9.us-east-1.amazonaws.com/storage/images/user001.png',
            ],[
            'name' => 'testuser002',
            'email' => 'test002@mail.com',
            'password' => Hash::make('testtest'),
            'users_profile_txt' => 'testuser002です。よろしくお願いします。',
            'users_icon_path' => 'https://71d969be34a64a37b077d252637a5528.vfs.cloud9.us-east-1.amazonaws.com/storage/images/user002.png',
            ],[
            'name' => 'testuser003',
            'email' => 'test003@mail.com',
            'password' => Hash::make('testtest'),
            'users_profile_txt' => 'testuser003です。よろしく。',
            'users_icon_path' => 'https://71d969be34a64a37b077d252637a5528.vfs.cloud9.us-east-1.amazonaws.com/storage/images/user003.png',
            ],[
            'name' => 'testuser004',
            'email' => 'test004@mail.com',
            'password' => Hash::make('testtest'),
            'users_profile_txt' => 'testuser004です。よろしくお願いします。',
            'users_icon_path' => 'https://71d969be34a64a37b077d252637a5528.vfs.cloud9.us-east-1.amazonaws.com/storage/images/user004.png',
            ],[
            'name' => 'testuser005',
            'email' => 'test005@mail.com',
            'password' => Hash::make('testtest'),
            'users_profile_txt' => 'testuser005です。よろしく。',
            'users_icon_path' => 'https://71d969be34a64a37b077d252637a5528.vfs.cloud9.us-east-1.amazonaws.com/storage/images/user005.png',
            ],
        ]);
    }
}
