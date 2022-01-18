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
                'full_name' => 'John Doe',
                'email' => 'john@examle.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 1,
                'phone' => '555555555',
                'created_at' => '2022-01-05',
                'updated_at' => '2022-01-05',
            ),
            1 => 
            array (
                'id' => 2,
                'full_name' => 'Shota Ivanidze',
                'email' => 'shota.ivanidze@gau.edu.ge',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 2,
                'phone' => '598610999',
                'created_at' => '2022-01-05',
                'updated_at' => '2022-01-05',
            ),
            2 => 
            array (
                'id' => 3,
                'full_name' => 'Gigi Tsetskhladze',
                'email' => 'gigi.tsetskhladze@gmail.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 3,
                'phone' => '555505910',
                'created_at' => '2022-01-05',
                'updated_at' => '2022-01-05',
            ),
            3 => 
            array (
                'id' => 4,
                'full_name' => 'Luka Tsetskhladze',
                'email' => 'luka.tsetskhladze@gau.edu.ge',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 4,
                'phone' => '555405910',
                'created_at' => '2022-01-05',
                'updated_at' => '2022-01-05',
            ),
        ));
        
        
    }
}