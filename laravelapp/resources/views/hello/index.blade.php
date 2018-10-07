@extends('layouts.helloapp')
<link rel="stylesheet" type="text/css" href="http://localhost/LaravelTutorial/laravelapp/public/css/app.css" />
<style>
.pagination{
  font-size: 10pt;
}
.pagination li{
  display: inline-block;
}
tr th a:link{
  color: white;
}
tr th a:hover{
  color: white;
}
tr th a:active{
  color: white;
}
</style>

@section('title', 'HelloIndex')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<table>
  <tr>
    <th>
      <a href="http://localhost/LaravelTutorial/laravelapp/public/hello?sort=name">Name:</a>
    </th>
    <th>
      <a href="http://localhost/LaravelTutorial/laravelapp/public/hello?sort=mail">Mail:</a>
    </th>
    <th>
      <a href="http://localhost/LaravelTutorial/laravelapp/public/hello?sort=age">age:</a>
    </th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>
      {{$item->name}}
    </td>
    <td>
      {{$item->mail}}
    </td>
    <td>
      {{$item->age}}
    </td>
  </tr>
  @endforeach
</table>
{{$items->appends(['sort' => $sort])->links()}}
@endsection

@if(Auth::check())
<p>
  USER: {{$user->name . '(' . $user->email . ')'}}
</p>
@else
<p>
  ※ログインしてません。(<a href="http://localhost/LaravelTutorial/laravelapp/public/login">ログイン</a>|<a href="http://localhost/LaravelTutorial/laravelapp/public/register">登録)</a>
</p>
@endif

@section('footer')
copyright 2017 mito.
@endsection
