<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\MoviesTableSeeder;
use Illuminate\Database\Eloquent\Model;
use Database\Seeders\CategoryTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();
        $this->call(CategoryTableSeeder::class);
        Model::reguard();

        Model::unguard();
        $this->call(MoviesTableSeeder::class);
        Model::reguard();

        User::factory(2)->create();
    }
}
