<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
      $this->call(PostsTableDataseeder::class);
      $this->call(CategoriesTableSeeder::class);
    }
}
