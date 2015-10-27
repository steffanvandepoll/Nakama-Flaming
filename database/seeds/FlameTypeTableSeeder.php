<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FlameTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flametypes')->insert([
            'type' => 'cry',
            'icon' => 'fa-tint',
            'description' => 'crying',
            'color' => '#4392e1'
        ]);

        DB::table('flametypes')->insert([
            'type' => 'flame',
            'icon' => 'fa-fire',
            'description' => 'flaming',
            'color' => '#B94A48'
        ]);

        DB::table('flametypes')->insert([
            'type' => 'leave',
            'icon' => 'fa-share',
            'description' => 'leaving',
            'color' => '#247679'
        ]);

        DB::table('flametypes')->insert([
            'type' => 'troll',
            'icon' => 'fa-wheelchair',
            'description' => 'trolling',
            'color' => '#785b23'
        ]);

        DB::table('flametypes')->insert([
            'type' => 'fear',
            'icon' => 'fa-exclamation',
            'description' => 'scaring',
            'color' => '#9743ac'
        ]);

        DB::table('flametypes')->insert([
            'type' => 'win',
            'icon' => 'fa-child',
            'description' => 'winning',
            'color' => '#408334'
        ]);

        DB::table('flametypes')->insert([
            'type' => 'lol',
            'icon' => 'fa-smile-o',
            'description' => 'lolling',
            'color' => '#f45600'
        ]);

        DB::table('flametypes')->insert([
            'type' => 'blame',
            'icon' => 'fa-hand-o-right',
            'description' => 'blaming',
            'color' => '#ff00ea'
        ]);

        
    }
}