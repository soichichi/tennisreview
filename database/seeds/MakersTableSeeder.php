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
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'id' => '2',
            'name' => 'BABOLAT',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'id' => '3',
            'name' => 'WILSON',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'id' => '4',
            'name' => 'YONEX',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]
        ]);  
    }
}
