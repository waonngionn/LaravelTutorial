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
      'mail' => 'mito@naoki.com',
      'age' => 19,
    ];
    DB::table('people')->insert($param);


    $param = [
      'name' => 'joe',
      'mail' => 'joe@watanabe.com',
      'age' => 18,
    ];
    DB::table('people')->insert($param);


    $param = [
      'name' => 'ryuunosuke',
      'mail' => 'ryuunosuke@fukuzaki.com',
      'age' => 19,
    ];
    DB::table('people')->insert($param);
  }
}
