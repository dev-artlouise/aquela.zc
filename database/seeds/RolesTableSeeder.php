<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2020-04-11 09:17:49',
                'updated_at' => '2020-04-11 09:17:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2020-04-11 09:17:49',
                'updated_at' => '2020-04-11 09:17:49',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'owner',
                'display_name' => 'Owner',
                'created_at' => '2020-04-17 07:04:16',
                'updated_at' => '2020-04-17 07:04:16',
            ),
        ));
        
        
    }
}