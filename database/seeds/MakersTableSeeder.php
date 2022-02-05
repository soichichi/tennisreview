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
            'name' => 'HEAD',
            ],
            [
            'name' => 'BABOLAT',
            ],
            [
            'name' => 'WILSON',
            ],
            [
            'name' => 'YONEX',  
            ]
        ]);  
    }
}
