<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\databaseTrasactions;
use App\User;
use App\Person;

class HelloTest extends TestCase
{
  use DatabaseMigrations;

  /**
  * A basic test example.
  *
  * @return void
  */
  // public function testExample()
  // {
  //   $this->assertTrue(true);
  // }
  public function testHello()
  {
    // ダミーで利用するデータ
    factory(User::class)->create([
      'name' => 'AAA',
      'email' => 'BBB@CCC.com',
      'password' => 'ABCABC',
    ]);
    factory(User::class, 10)->create();

    $this->assertDatabaseHas('users', [
      'name' => 'AAA',
      'email' => 'BBB@CCC.com',
      'password' => 'ABCABC',
    ]);

    // ダミーで利用するデータ
    factory(Person::class)->create([
      'name' => 'XXX',
      'mail' => 'YYY@ZZZ.com',
      'age' => 123,
    ]);
    factory(Person::class, 10)->create();

    $this->assertDatabaseHas('people', [
      'name' => 'XXX',
      'mail' => 'YYY@ZZZ.com',
      'age' => 123,
    ]);
    // $this->assertTrue(true);
    //
    // $response = $this->get('/');
    // $response->assertStatus(200);
    //
    // $response = $this->get('/hello');
    // $response->assertStatus(302);
    //
    // $user = factory(User::class)->create();
    // $response = $this->actingAs($user)->get('/hello');
    // $response->assertStatus(200);
    //
    // $response = $this->get('/no_route');
    // $response->assertStatus(404);
    //
    // $arr = [];
    // $this->assertEmpty($arr);
    //
    // $msg = "Hello";
    // $this->assertEquals('Hello', $msg);
    //
    // $n = random_int(0, 100);
    // $this->assertLessThan(100, $n);
  }
}
