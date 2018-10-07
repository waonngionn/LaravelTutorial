<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Person;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
  public function index(request $request)
  {
    // $items = DB::table('people')->get();
    // return view('hello.index', ['items' => $items]);
    // $items = Person::where('name', 'mito')->simplePaginate(3);
    // logger($items);
    // return view('hello.index', ['items' => $items]);
    $user = Auth::user();
    $sort = $request->sort;
    if($sort == null){
      $sort = "name";
    }
    $items = Person::orderBy($sort, 'asc')->paginate(3);
    $param = ['items' => $items, 'sort' => $sort, 'user' => $user];
    return view('hello.index', $param);
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

  public function rest(Request $request)
  {
    return view('hello.rest');
  }

  public function ses_get(Request $request)
  {
    $sesdata = $request->session()->get('msg');
    return view('hello.session', ['session_data' => $sesdata]);
  }

  public function ses_put(Request $request)
  {
    $msg = $request->input;
    $request->session()->put('msg', $msg);
    return redirect('hello/session');
  }

  public function getAuth(Request $request)
  {
    $param = ['message' => 'ログインしてください'];
    return view('hello/auth', $param);
  }

  public function postAuth(Request $request)
  {
    $email = $request->email;
    $password = $request->password;
    if(Auth::attempt(['email' => $email, 'password' => $password]))
    {
      $msg = "ログイン成功しました";
    }else{
      $msg = "ログイン失敗しました";
    }
    return view('hello/auth', ['message' => $msg]);
  }
}
