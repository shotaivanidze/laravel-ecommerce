<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('addresses')->delete();
        
        \DB::table('addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'area' => 'Sololaki',
                'city' => 'Tbilisi',
                'zip' => 0104,
            ),
            1 => 
            array (
                'id' => 2,
                'area' => 'Saburtalo',
                'city' => 'Tbilisi',
                'zip' => 0106,
            ),
            2 => 
            array (
                'id' => 3,
                'area' => 'Ortachala',
                'city' => 'Tbilisi',
                'zip' => 0105,
            ),
            3 => 
            array (
                'id' => 4,
                'area' => 'Avlabari',
                'city' => 'Tbilisi',
                'zip' => 0106,
            ),
        ));
        
        
    }
}