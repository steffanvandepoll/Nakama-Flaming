<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FlameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flames')->insert([
            'title' => 'Speel jij in bronze ofzo!',
            'type_ids' => '2,4',
            'champion_ids' => '12',
            'filepath' => 'jp - Braum - in brons spelen.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Nog steeds geen ult?!',
            'type_ids' => '2',
            'champion_ids' => '12',
            'filepath' => 'jp - Braum - nog steeds geen ult.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'OMG!!!',
            'type_ids' => '2',
            'champion_ids' => '12',
            'filepath' => 'jp - Braum - omg.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Ik reageer er niet eens op...',
            'type_ids' => '1',
            'champion_ids' => '13',
            'filepath' => 'stef - Caitlyn - reageert niet.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Hoe lucky?',
            'type_ids' => '1,2',
            'champion_ids' => '13',
            'filepath' => 'loek-viktor-kk-lucky.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Oh nee... het is Morgana',
            'type_ids' => '4,5',
            'champion_ids' => '113',
            'filepath' => 'jp-graves-o-nee-het-is-morgana.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => '... Kut kut kut kuuuutttt...',
            'type_ids' => '5',
            'champion_ids' => '33',
            'filepath' => 'jp-graves-oh-jesus-kut-kut-kut-kut-kut.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Feed me...',
            'type_ids' => '6',
            'champion_ids' => '5',
            'filepath' => 'nicky-amamu-feedme.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Ik miste mijn ult!',
            'type_ids' => '4,7',
            'champion_ids' => '33,90,112',
            'filepath' => 'jp-graves-ik-miste-mijn-ult.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'JaAaAaA!!!',
            'type_ids' => '5',
            'champion_ids' => '33',
            'filepath' => 'jp-graves-jaaaaaaaaa.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Lucky Bastard!',
            'type_ids' => '2',
            'champion_ids' => '33',
            'filepath' => 'jp-graves-kk-tf-lucky-bastard.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'NeEeEeE!!!',
            'type_ids' => '1',
            'champion_ids' => '33',
            'filepath' => 'jp-graves-neeeeeee.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'more neeeeee!!!!',
            'type_ids' => '1,5',
            'champion_ids' => '33',
            'filepath' => 'jp-graves-nick-neeeee.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Laterrr...',
            'type_ids' => '2',
            'champion_ids' => '119',
            'filepath' => 'jp-xin-ok-ok-later.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'En ik nieeeeettttt!',
            'type_ids' => '5,7',
            'champion_ids' => '33,90,112,113',
            'filepath' => 'loek-viktor-nee.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Waardelooooss!',
            'type_ids' => '2, 4',
            'champion_ids' => '33,113',
            'filepath' => 'nicky-vi-nice-ss-loek.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Waarom doe je dat!',
            'type_ids' => '2',
            'champion_ids' => '33,90',
            'filepath' => 'steffan-sivir-kutzooi.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Hij zoekt het gewoon op!',
            'type_ids' => '3,4',
            'champion_ids' => '90,113',
            'filepath' => 'steffan-sivir-loek-zoekt-het-gewoon-op.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Ja ik ben dood...',
            'type_ids' => '1,4',
            'champion_ids' => '48,119',
            'filepath' => 'xin-kennen-dood.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Garen zit alleen maar in bosjes!',
            'type_ids' => '1,2',
            'champion_ids' => '119',
            'filepath' => 'jp-xin-garen-crying.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'jij bent fucking crazy!',
            'type_ids' => '2',
            'champion_ids' => '119',
            'filepath' => 'jp-xin-fucking-crazy.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Fucking useless!',
            'type_ids' => '2',
            'champion_ids' => '119',
            'filepath' => 'jp-xin-useless.mp3'
        ]);

        DB::table('flames')->insert([
            'title' => 'Garen doet k*!%*# veel damage!',
            'type_ids' => '1,2',
            'champion_ids' => '119',
            'filepath' => 'jp-xin-garen-dmg.mp3'
        ]);



    }
}