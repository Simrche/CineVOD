<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 100; $i++) {
            Schema::disableForeignKeyConstraints();
            DB::table('movies')->insert([
                'title_movie' => "Film n°" . $i,
                'prix' => rand(1, 20),
                'Stock' => rand(100, 2000),
                'img' => 'https://i1.wp.com/blog.son-video.com/wp-content/uploads/2020/02/Gangs-Of-New-York-AFFICHE-CINEMA-ORIGINALE-1.jpg?resize=500%2C679&ssl=1',
                'title_categorie' => rand(1,10),
            ]);
        }
    }
}
