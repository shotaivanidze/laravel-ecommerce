<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'username' => 'admin',
                'name' => 'Shota',
                'password' => '12345',
                'created_at' => '2021-12-29',
                'updated_at' => '2021-12-29',
            ),
        ));
        
        
    }
}