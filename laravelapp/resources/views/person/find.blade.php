@extends('layouts.helloapp')

@section('title', 'Person.find')

@section('menubar')
@parent
検索ページ
@endsection

@section('content')
<form action="" method="post">
  {{csrf_field()}}
  <input type="text" name="input" method="post" />
  <input type="submit" value="find" />
</form>

@if(isset($item))
<table>
  <tr>
    <th>
      Data
    </th>
  </tr>
  <tr>
    <td>
      {{$item->getdata()}}
    </td>
  </tr>
</table>
@endif
@endsection

@section('footer')
copyright 2018 mito.
@endsection
