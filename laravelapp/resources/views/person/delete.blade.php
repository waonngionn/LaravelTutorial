@extends('layouts.helloapp')

@section('title', 'Person.Delete')

@section('menubar')
@parent
削除ページ
@endsection

@section('content')
<table>
  <form action="" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$form->id}}" />
    <tr>
      <th>
        Name:
      </th>
      <td>
        <input type="text" name="name" value="{{$form->name}}" />
      </td>
    </tr>
    <tr>
      <th>
        Mail:
      </th>
      <td>
        <input type="text" name="mail" value="{{$form->mail}}" />
      </td>
    </tr>
    <tr>
      <th>
        Age:
      </th>
      <td>
        <input type="number" name="age" value="{{$form->age}}" />
      </td>
    </tr>
    <tr>
      <th>
      </th>
      <td>
        <input type="submit" value="delete" />
      </td>
    </tr>
  </form>
</table>
@endsection

@section('footer')
copyright 2018 mito.
@endsection
