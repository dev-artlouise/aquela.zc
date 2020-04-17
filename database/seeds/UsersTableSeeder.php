<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => NULL,
                'name' => 'Art Sambrano',
                'email' => 'art@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nrb7ZJ0ML77xmHPiggTF3uMs/7eM5rX4cCK6agXKnojvSEEqkkB/C',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-11 09:02:51',
                'updated_at' => '2020-04-11 09:02:51',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Super admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users\\April2020\\EWTY4vANwUDcy9zj7yRQ.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5OhcV2WQQFhJgoL88ubBUO7cmBewyz5sz9p2K4RuPipdjrXGmYY22',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-04-11 09:20:38',
                'updated_at' => '2020-04-11 09:32:14',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Elisha Napalcruz',
                'email' => 'elisha@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2RQhUGfF2DRLfWegeGgWRuaEpHgT0wn9ERhE9fe5F1QhwVPbr7Mja',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-11 10:07:38',
                'updated_at' => '2020-04-11 10:07:38',
            ),
            3 => 
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Kim Dolar',
                'email' => 'kim@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HpQCBGpRtR6KgeFHPvqGWOm4p6gVTtQ5q38NuGcvdbFZhcryDVVm.',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-17 07:32:17',
                'updated_at' => '2020-04-17 07:35:41',
            ),
            4 => 
            array (
                'id' => 6,
                'role_id' => 3,
                'name' => 'Kurt Bornales',
                'email' => 'kurt@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9kbTTojQuLr0U8z5oP2eN./j3g1vj3VlgAR5Zy/ZqoZtrKoBbMVrK',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-17 07:43:02',
                'updated_at' => '2020-04-17 07:43:48',
            ),
        ));
        
        
    }
}