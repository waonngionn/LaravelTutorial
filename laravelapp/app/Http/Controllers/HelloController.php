<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
  public function index()
  {
    $items = DB::table('people')->get();
    logger($items);
    return view('hello.index', ['items' => $items]);
  }

  public function show(Request $request)
  {
    $id = $request->id;
    $item = DB::table('people')->where('id', $id)->first();
    logger($request->id);
    return view('hello.show', ['item' => $item]);
  }

  public function add()
  {
    return view('hello.create');
  }

  public function create(Request $request)
  {
    $param = [
      'name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
    ];
    DB::table('people')->insert($param);
    return redirect('/hello');
  }

  public function edit(Request $request)
  {
    $item = DB::table('people')->where('id', $request->id)->first();
    return view('hello.edit', ['form'=> $item]);
  }

  public function update(Request $request)
  {
    $param = [
      'name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
    ];
    DB::table('people')->where('id', $request->id)->update($param);
    return redirect('/hello');
  }

  public function remove(Request $request)
  {
    $item = DB::table('people')->where('id', $request->id)->first();
    return view('hello.delete', ['form' => $item]);
  }

  public function delete(Request $request)
  {
    $id = $request->id;
    DB::table('people')->where('id', $id)->delete();
    return redirect('/hello');
  }
}
