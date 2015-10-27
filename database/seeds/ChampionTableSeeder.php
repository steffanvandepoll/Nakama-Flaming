<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ChampionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('champions')->insert([
            'name' => 'Aatrox',
            'nickname' => 'the Darkin Blade',
            'filename' => 'Aatrox_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Ahri',
            'nickname' => 'the Nine-Tailed Fox',
            'filename' => 'Ahri_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Akali',
            'nickname' => 'the Fist of Shadow',
            'filename' => 'Akali_Square_0.png'
        ]);
         DB::table('champions')->insert([
            'name' => 'Alistar',
            'nickname' => 'the Minotaur',
            'filename' => 'Alistar_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Amumu',
            'nickname' => 'the Sad Mummy',
            'filename' => 'Amumu_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Anivia',
            'nickname' => 'the Cryophoenix',
            'filename' => 'Anivia_Square_0.png'
        ]);
         DB::table('champions')->insert([
            'name' => 'Annie',
            'nickname' => 'the Dark Child',
            'filename' => 'Annie_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Ashe',
            'nickname' => 'the Frost Archer',
            'filename' => 'Ashe_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Bard',
            'nickname' => 'the Wandering Caretaker',
            'filename' => 'Bard_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Blitzcrank',
            'nickname' => 'the Great Steam Golem',
            'filename' => 'Blitzcrank_Square_0.png'
        ]);

         DB::table('champions')->insert([
            'name' => 'Brand',
            'nickname' => 'the Burning Vengeance',
            'filename' => 'Brand_Square_0.png'
        ]);

         DB::table('champions')->insert([
            'name' => 'Braum',
            'nickname' => 'the Heart of the Freljord',
            'filename' => 'Braum_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Caitlyn',
            'nickname' => 'the Sheriff of Piltover',
            'filename' => 'Caitlyn_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Cassiopeia',
            'nickname' => 'the Serpent’s Embrace',
            'filename' => 'Cassiopeia_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Cho\'Gath',
            'nickname' => 'the Terror of the Void',
            'filename' => 'Chogath_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Corki',
            'nickname' => 'the Daring Bombardier',
            'filename' => 'Corki_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Darius',
            'nickname' => 'the Hand of Noxus',
            'filename' => 'Darius_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Diana',
            'nickname' => 'Scorn of the Moon',
            'filename' => 'Diana_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Dr. Mundo',
            'nickname' => 'the Madman of Zaun',
            'filename' => 'DrMundo_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Draven',
            'nickname' => 'the Glorious Executioner',
            'filename' => 'Draven_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Ekko',
            'nickname' => 'the Boy Who Shattered Time',
            'filename' => 'Ekko_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Elise',
            'nickname' => 'The Spider Queen',
            'filename' => 'Elise_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Evelynn',
            'nickname' => 'the Widowmaker',
            'filename' => 'Evelynn_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Ezreal',
            'nickname' => 'the Prodigal Explorer',
            'filename' => 'Ezreal_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Fiddlesticks',
            'nickname' => 'the Harbinger of Doom',
            'filename' => 'Fiddlesticks_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Fiora',
            'nickname' => 'the Grand Duelist',
            'filename' => 'Fiora_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Fizz',
            'nickname' => 'the Tidal Trickster',
            'filename' => 'Fizz_square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Galio',
            'nickname' => 'the Sentinel\'s Sorrow',
            'filename' => 'Galio_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Gangplank',
            'nickname' => 'the Saltwater Scourge',
            'filename' => 'Gangplank_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Garen',
            'nickname' => 'The Might of Demacia',
            'filename' => 'Garen_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Gnar',
            'nickname' => 'the Missing Link',
            'filename' => 'Gnar_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Gragas',
            'nickname' => 'the Rabble Rouser',
            'filename' => 'Gragas_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Graves',
            'nickname' => 'the Outlaw',
            'filename' => 'Graves_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Hecarim',
            'nickname' => 'the Shadow of War',
            'filename' => 'Hecarim_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Heimerdinger',
            'nickname' => 'the Revered Inventor',
            'filename' => 'Heimerdinger_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Irelia',
            'nickname' => 'the Will of the Blades',
            'filename' => 'Irelia_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Janna',
            'nickname' => 'the Storm\'s Fury',
            'filename' => 'Janna_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Jarvan IV',
            'nickname' => 'the Exemplar of Demacia',
            'filename' => 'JarvanIV_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Jax',
            'nickname' => 'Grandmaster at Arms',
            'filename' => 'Jax_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Jayce',
            'nickname' => 'the Defender of Tomorrow',
            'filename' => 'Jayce_Square_0.png'
        ]);

         DB::table('champions')->insert([
            'name' => 'Jinx',
            'nickname' => 'the Loose Cannon',
            'filename' => 'Jinx_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Kalista',
            'nickname' => 'the Spear of Vengeance',
            'filename' => 'Kalista_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Karma',
            'nickname' => 'the Enlightened One',
            'filename' => 'Karma_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Karthus',
            'nickname' => 'the Deathsinger',
            'filename' => 'Karthus_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Kassadin',
            'nickname' => 'the Void Walker',
            'filename' => 'Kassadin_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Katarina',
            'nickname' => 'the Sinister Blade',
            'filename' => 'Katarina_Square_0.png'
        ]);   

        DB::table('champions')->insert([
            'name' => 'Kayle',
            'nickname' => 'The Judicator',
            'filename' => 'Kayle_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Kennen',
            'nickname' => 'the Heart of the Tempest',
            'filename' => 'Kennen_Square_0.png'
        ]);

         DB::table('champions')->insert([
            'name' => 'Kha\'Zix',
            'nickname' => 'the Voidreaver',
            'filename' => 'Khazix_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Kindred',
            'nickname' => 'The Eternal Hunters',
            'filename' => 'Kindred_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Kog\'Maw',
            'nickname' => 'the Mouth of the Abyss',
            'filename' => 'KogMaw_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'LeBlanc',
            'nickname' => 'the Deceiver',
            'filename' => 'Leblanc_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Lee Sin',
            'nickname' => 'the Blind Monk',
            'filename' => 'LeeSin_Square_0.png'
        ]);

         DB::table('champions')->insert([
            'name' => 'Leona',
            'nickname' => 'the Radiant Dawn',
            'filename' => 'Leona_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Lissandra',
            'nickname' => 'the Ice Witch',
            'filename' => 'Lissandra_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Lucian',
            'nickname' => 'the Purifier',
            'filename' => 'Lucian_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Lulu',
            'nickname' => 'the Fae Sorceress',
            'filename' => 'Lulu_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Lux',
            'nickname' => 'the Lady of Luminosity',
            'filename' => 'Lux_Square_0.png'
        ]);

         DB::table('champions')->insert([
            'name' => 'Malphite',
            'nickname' => 'Shard of the Monolith',
            'filename' => 'Malphite_Square_0.png'
        ]);


        DB::table('champions')->insert([
            'name' => 'Malzahar',
            'nickname' => 'the Prophet of the Void',
            'filename' => 'Malzahar_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Maokai',
            'nickname' => 'the Twisted Treant',
            'filename' => 'Maokai_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Master Yi',
            'nickname' => 'the Wuju Bladesman',
            'filename' => 'MasterYi_Square_0.png'
        ]);

         DB::table('champions')->insert([
            'name' => 'Miss Fortune',
            'nickname' => 'the Bounty Hunter',
            'filename' => 'MissFortune_Square_0.png'
        ]);


        DB::table('champions')->insert([
            'name' => 'Mordekaiser',
            'nickname' => 'the Master of Metal',
            'filename' => 'Mordekaiser_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Morgana',
            'nickname' => 'Fallen Angel',
            'filename' => 'Morgana_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Nami',
            'nickname' => 'the Tidecaller',
            'filename' => 'Nami_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Nasus',
            'nickname' => 'the Curator of the Sands',
            'filename' => 'Nasus_Square_0.png'
        ]);

         DB::table('champions')->insert([
            'name' => 'Nautilus',
            'nickname' => 'the Titan of the Depths',
            'filename' => 'Nautilus_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Nidalee',
            'nickname' => 'the Bestial Huntress',
            'filename' => 'Nidalee_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Nocturne',
            'nickname' => 'the Eternal Nightmare',
            'filename' => 'Nocturne_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Nunu',
            'nickname' => 'the Yeti Rider',
            'filename' => 'Nunu_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Olaf',
            'nickname' => 'the Berserker',
            'filename' => 'Olaf_Square_0.png'
        ]);

         DB::table('champions')->insert([
            'name' => 'Orianna',
            'nickname' => 'the Lady of Clockwork',
            'filename' => 'Orianna_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Pantheon',
            'nickname' => 'the Artisan of War',
            'filename' => 'Pantheon_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Poppy',
            'nickname' => 'the Iron Ambassador',
            'filename' => 'Poppy_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Quinn',
            'nickname' => 'Demacia\'s Wings',
            'filename' => 'Quinn_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Rammus',
            'nickname' => 'the Armordillo',
            'filename' => 'Rammus_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Rek\'Sai',
            'nickname' => 'the Void Burrower',
            'filename' => 'RekSai_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Renekton',
            'nickname' => 'the Butcher of the Sands',
            'filename' => 'Renekton_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Rengar',
            'nickname' => 'the Pridestalker',
            'filename' => 'Rengar_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Riven',
            'nickname' => 'the Exile',
            'filename' => 'Riven_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Rumble',
            'nickname' => 'the Mechanized Menace',
            'filename' => 'Rumble_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Ryze',
            'nickname' => 'the Rogue Mage',
            'filename' => 'Ryze_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Sejuani',
            'nickname' => 'the Winter\'s Wrath',
            'filename' => 'Sejuani_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Shaco',
            'nickname' => 'the Demon Jester',
            'filename' => 'Shaco_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Shen',
            'nickname' => 'Eye of Twilight',
            'filename' => 'Shen_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Shyvana',
            'nickname' => 'the Half-Dragon',
            'filename' => 'Shyvana_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Singed',
            'nickname' => 'the Mad Chemist',
            'filename' => 'Singed_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Sion',
            'nickname' => 'The Undead Juggernaut',
            'filename' => 'Sion_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Sivir',
            'nickname' => 'the Battle Mistress',
            'filename' => 'Sivir_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Skarner',
            'nickname' => 'the Crystal Vanguard',
            'filename' => 'Skarner_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Sona',
            'nickname' => 'Maven of the Strings',
            'filename' => 'Sona_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Soraka',
            'nickname' => 'the Starchild',
            'filename' => 'Soraka_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Swain',
            'nickname' => 'the Master Tactician',
            'filename' => 'Swain_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Syndra',
            'nickname' => 'the Dark Sovereign',
            'filename' => 'Syndra_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Tahm Kench',
            'nickname' => 'the River King',
            'filename' => 'TahmKench_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Talon',
            'nickname' => 'the Blade\'s Shadow',
            'filename' => 'Talon_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Taric',
            'nickname' => 'the Gem Knight',
            'filename' => 'Taric_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Teemo',
            'nickname' => 'the Swift Scout',
            'filename' => 'Teemo_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Thresh',
            'nickname' => 'the Chain Warden',
            'filename' => 'Thresh_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Tristana',
            'nickname' => 'the Yordle Gunner',
            'filename' => 'Tristana_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Trundle',
            'nickname' => 'the Troll King',
            'filename' => 'Trundle_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Tryndamere',
            'nickname' => 'the Barbarian King',
            'filename' => 'Tryndamere_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Twisted Fate',
            'nickname' => 'the Card Master',
            'filename' => 'TwistedFate_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Twitch',
            'nickname' => 'the Plague Rat',
            'filename' => 'Twitch_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Udyr',
            'nickname' => 'the Spirit Walker',
            'filename' => 'Udyr_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Urgot',
            'nickname' => 'the Headsman\'s Pride',
            'filename' => 'Urgot_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Varus',
            'nickname' => 'the Arrow of Retribution',
            'filename' => 'Varus_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Vayne',
            'nickname' => 'the Night Hunter',
            'filename' => 'Vayne_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Veigar',
            'nickname' => 'the Tiny Master of Evil',
            'filename' => 'Veigar_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Vel\'Koz',
            'nickname' => 'the Eye of the Void',
            'filename' => 'VelKoz_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Vi',
            'nickname' => 'the Piltover Enforcer',
            'filename' => 'Vi_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Viktor',
            'nickname' => 'the Machine Herald',
            'filename' => 'Viktor_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Vladimir',
            'nickname' => 'the Crimson Reaper',
            'filename' => 'Vladimir_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Volibear',
            'nickname' => 'the Thunder\'s Roar',
            'filename' => 'Volibear_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Warwick',
            'nickname' => 'the Blood Hunter',
            'filename' => 'Warwick_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Wukong',
            'nickname' => 'the Monkey King',
            'filename' => 'MonkeyKing_Square_0.png'
        ]);


        DB::table('champions')->insert([
            'name' => 'Xerath',
            'nickname' => 'the Magus Ascendant',
            'filename' => 'Xerath_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Xin Zhao',
            'nickname' => 'the Seneschal of Demacia',
            'filename' => 'XinZhao_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Yasuo',
            'nickname' => 'the Unforgiven',
            'filename' => 'Yasuo_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Yorick',
            'nickname' => 'the Gravedigger',
            'filename' => 'Yorick_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Zac',
            'nickname' => 'the Secret Weapon',
            'filename' => 'Zac_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Zed',
            'nickname' => 'the Master of Shadows',
            'filename' => 'Zed_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Ziggs',
            'nickname' => 'the Hexplosives Expert',
            'filename' => 'Ziggs_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Zilean',
            'nickname' => 'the Chronokeeper',
            'filename' => 'Zilean_Square_0.png'
        ]);

        DB::table('champions')->insert([
            'name' => 'Zyra',
            'nickname' => 'Rise of the Thorns',
            'filename' => 'Zyra_Square_0.png'
        ]);


    }
}