@extends('layouts.helloapp')

@section('title', 'create')

@section('menubar')
  @parent
  createページ
@endsection

@section('content')
<form action="create" method="post">
  {{csrf_field()}}
  Name:<input type="text" name="name" />
  Mail:<input type="text" name="mail" />
  Age: <input type="text" name="age" />
  <input type="submit" value="send" />
</form>
@endsection
