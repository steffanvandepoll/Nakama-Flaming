<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            'description' => '... Kut kut kut kuuuutttt...',
            'filepath' => '1.png',
            'flame_id' => '7'
        ]);

        DB::table('slides')->insert([
            'description' => 'NeEeEeE!!!',
            'filepath' => '2.png',
            'flame_id' => '12'
        ]);

        DB::table('slides')->insert([
            'description' => 'Hoe veel damage?',
            'filepath' => '3.png',
            'flame_id' => '23'
        ]);
    }
}