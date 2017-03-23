<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
          'id' => '1',
          'name' => 'Python tutorial',
          'created_at' => date('Y-m-d H:i:s')
        ]);
      DB::table('categories')->insert([
          'id' => '2',
          'name' => 'ROR tutorial',
          'created_at' => date('Y-m-d H:i:s')
        ]);
      DB::table('categories')->insert([
          'id' => '3',
          'name' => 'JAVA tutorial',
          'created_at' => date('Y-m-d H:i:s')
        ]);
      DB::table('categories')->insert([
          'id' => '4',
          'name' => 'Laravel tutorial',
          'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
