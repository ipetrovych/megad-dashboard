<?php

use Illuminate\Database\Seeder;

class LightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lights')->delete();

        $lights = [
            ['floor' => 1, 'top' =>  72, 'left' => 179, 'port' => null],
            ['floor' => 1, 'top' => 106, 'left' => 360, 'port' => null],
            ['floor' => 1, 'top' => 244, 'left' => 155, 'port' => null],
            ['floor' => 1, 'top' => 281, 'left' => 360, 'port' => null],
            ['floor' => 1, 'top' => 445, 'left' => 183, 'port' => null],
            ['floor' => 1, 'top' => 407, 'left' => 405, 'port' => null],

            ['floor' => 2, 'top' =>  54, 'left' => 179, 'port' => null],
            ['floor' => 2, 'top' => 106, 'left' => 370, 'port' => null],
            ['floor' => 2, 'top' => 193, 'left' => 176, 'port' => null],
            ['floor' => 2, 'top' => 289, 'left' => 366, 'port' => null],
            ['floor' => 2, 'top' => 406, 'left' => 177, 'port' => null],
            ['floor' => 2, 'top' => 439, 'left' => 366, 'port' => null],
        ];

        DB::table('lights')->insert($lights);
    }
}
