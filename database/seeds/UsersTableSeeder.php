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
                'role_id' => 1,
                'first_name' => 'SUPER',
                'last_name' => 'ADMIN',
                'email' => 'superadmin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oyM2PHkqgc5Dmb8pwjghxuri.IDOZ/8hhHl5dt8SASrAQeyl4LUgC',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-20 08:04:16',
                'updated_at' => '2020-04-20 08:04:16',
            ),
        ));
        
        
    }
}