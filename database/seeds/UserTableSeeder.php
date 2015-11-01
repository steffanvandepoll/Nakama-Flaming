<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Steffan van de Poll',
            'email' => 'steffanvandepoll@gmail.com',
            'password' => bcrypt('Gunblade'),
        ]);

        DB::table('users')->insert([
            'name' => 'Nicky Heuperman',
            'email' => 'nicky@dev-ice.com',
            'password' => bcrypt('Jungle'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rutger Lankhuijzen',
            'email' => 'rrlankhuijzen@gmail.com ',
            'password' => bcrypt('Soraka'),
        ]);

        DB::table('users')->insert([
            'name' => 'JP Sonneveld',
            'email' => 'jpsonneveld@gmail.com',
            'password' => bcrypt('Silver4'),
        ]);

        DB::table('users')->insert([
            'name' => 'Willem van Rooi',
            'email' => 'loek.vanrooij@hotmail.com',
            'password' => bcrypt('koning'),
        ]);

         
    }
}