@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
  @parent
  Editページ
@endsection

@section('content')
  <form action="" method="post">
    {{csrf_field()}}
    Name:<input type="text" name="name" value="{{$form->name}}" />
    Mail:<input type="text" name="mail" value="{{$form->mail}}" />
    Age:<input type="text" name="age" value="{{$form->age}}" />
    <input type="submit" value="send" />
  </form>
@endsection

@section('footer')
copyright 2018 mito.
@endsection
