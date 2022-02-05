<?php

use Illuminate\Database\Seeder;

class MakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('makers')->insert([
            [
            'id' => '1',
            'name' => 'HEAD',
            ],
            [
            'id' => '2',
            'name' => 'BABOLAT',
            ],
            [
            'id' => '3',
            'name' => 'WILSON',
            ],
            [
            'id' => '4',
            'name' => 'YONEX',  
            ]
        ]);  
    }
}
