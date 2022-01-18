<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sales')->delete();
        
        \DB::table('sales')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'product_id' => '3:1:#000000:1',
                'order_status' => 'Delivered',
                'price' => 2900,
                'created_at' => '2021-01-06 17:32:33',
                'updated_at' => '2021-01-06',
            ),
            array (
                'id' => 13,
                'user_id' => 1,
                'product_id' => '4:1:#c0c0c0:1',
                'order_status' => 'On Process',
                'price' => 4999,
                'created_at' => '2021-01-06 20:54:08',
                'updated_at' => '2021-01-06',
            ),
        ));
        
        
    }
}