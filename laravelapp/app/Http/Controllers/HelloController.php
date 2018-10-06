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
    $item = DB::table('people')->where('id',$id)->first();
    logger($item);
    return view('hello.show', ['item' => $item]);
  }
}
