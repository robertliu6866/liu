<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Robert;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
  $user =
     User::factory()
      ->count(10)
      ->hasPosts(2)
      ->create();
    
    
    // Robert::factory(5)->create();

    // Category::factory(5)->create();


  }
}