<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $param = [
      'name' => 'mito',
      'mail' => 'mito@nexttolight.com',
      'age' => 10,
    ];
    DB::table('people')->insert($param);


    $param = [
      'name' => 'joe',
      'mail' => 'joe@nexttolight.com',
      'age' => 4,
    ];
    DB::table('people')->insert($param);


    $param = [
      'name' => 'ryuunosuke',
      'mail' => 'ryuunosuke@nexttolight.com',
      'age' => 80,
    ];
    DB::table('people')->insert($param);
  }
}
