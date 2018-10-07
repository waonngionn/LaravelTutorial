<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
  public function index(Request $request)
  {
    // $items = Person::all();
    // return view('person.index', ['items' => $items]);
    $hasItems = Person::has('boards')->get();
    $noItems = Person::doesntHave('boards')->get();
    $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
    return view('person.index', $param);
  }

  public function find(Request $request)
  {
    return view('person.find', ['input' => '']);
  }

  public function search(Request $request)
  {
    $item = Person::ageGreaterThan()->ageLessThan()->first();
    logger($item);
    $param = ['input' => $request->input, 'item' => $item];
    return view('person.find', $param);
  }

  public function add()
  {
    return view('person.add');
  }

  public function create(Request $request)
  {
    $this->validate($request, Person::$rules);
    $person = new Person();
    $form = $request->all();
    unset($form['_token']);
    $person->fill($form)->save();
    return redirect('./person');
  }

  public function edit(Request $request)
  {
    $form = Person::find($request->id);
    return view('person.edit', ['form' => $form]);
  }

  public function update(Request $request)
  {
    $this->validate($request, Person::$rules);
    $person = Person::find($request->id);
    $form = $request->all();
    unset($form["_token"]);
    $person->fill($form)->save();
    return redirect('./person');
  }

  public function delete(Request $request)
  {
    $form = Person::find($request->id);
    return view('person.delete', ['form' => $form]);
  }

  public function remove(Request $request)
  {
    Person::find($request->id)->delete();
    return redirect('./person');
  }
}
