<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    //\App\Models\Category::factory(5)->create();
    \App\Models\User::factory(10)->create()->each(function ($user) {
      Article::factory(10)->sequence(['user_id' => $user->id])->create();
    });
  }
}
