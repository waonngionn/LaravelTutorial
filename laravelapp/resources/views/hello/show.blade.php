@extends('layouts.helloapp')

@section('title', 'show')

@section('menubar')
@parent
show
@endsection

@section('content')
<table>
  <tr>
    <th>
      ID:
    </th>
    <th>
      NAME:
    </th>
    <th>
      MAIL:
    </th>
    <th>
      AGE:
    </th>
  </tr>
  <tr>
    <td>
      {{$item->id}}
    </td>
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
</table>
@endsection

@section('footer')
copyright 2018 mito.
@endsection
