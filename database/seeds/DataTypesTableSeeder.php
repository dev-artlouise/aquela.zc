<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-11 09:17:47',
                'updated_at' => '2020-04-11 09:17:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-11 09:17:47',
                'updated_at' => '2020-04-11 09:17:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-11 09:17:47',
                'updated_at' => '2020-04-11 09:17:47',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-11 09:17:53',
                'updated_at' => '2020-04-11 09:17:53',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-11 09:17:54',
                'updated_at' => '2020-04-11 09:17:54',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-11 09:17:57',
                'updated_at' => '2020-04-11 09:17:57',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'bookings',
                'slug' => 'bookings',
                'display_name_singular' => 'Booking',
                'display_name_plural' => 'Bookings',
                'icon' => 'voyager-logbook',
                'model_name' => 'App\\Booking',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-11 09:38:49',
                'updated_at' => '2020-04-11 10:13:30',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'apartments',
                'slug' => 'apartments',
                'display_name_singular' => 'Apartment',
                'display_name_plural' => 'Apartments',
                'icon' => 'voyager-shop',
                'model_name' => 'App\\Apartment',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\ApartmentController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-17 06:59:36',
                'updated_at' => '2020-04-23 07:05:48',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'units',
                'slug' => 'units',
                'display_name_singular' => 'Unit',
                'display_name_plural' => 'Units',
                'icon' => 'voyager-home',
                'model_name' => 'App\\Unit',
                'policy_name' => '\\App\\Policies\\UnitPolicy',
                'controller' => 'App\\Http\\Controllers\\Admin\\UnitController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-17 07:03:13',
                'updated_at' => '2020-04-23 07:07:44',
            ),
        ));
        
        
    }
}