<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(ChampionTableSeeder::class);
        $this->call(FlameTableSeeder::class);
        $this->call(FlameTypeTableSeeder::class);
        $this->call(SlideTableSeeder::class);
        

        Model::reguard();
    }
}
