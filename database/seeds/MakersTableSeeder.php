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
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'name' => 'BABOLAT',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'name' => 'WILSON',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ],
            [
            'name' => 'YONEX',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]
        ]);  
    }
}
