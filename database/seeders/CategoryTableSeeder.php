<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listCategory = ['Drame', 'Comedie', 'Action', 'Aventure', "Policier", 'Science fiction', 'Futuriste', 'Classique', 'Peplum', "Western"];
        foreach ($listCategory as $category) {
            Schema::disableForeignKeyConstraints();
            DB::table('categories')->insert([
                'title_categorie' => $category,
                'img' => 'https://i1.wp.com/blog.son-video.com/wp-content/uploads/2020/02/Gangs-Of-New-York-AFFICHE-CINEMA-ORIGINALE-1.jpg?resize=500%2C679&ssl=1',
            ]);
        }
    }
}
