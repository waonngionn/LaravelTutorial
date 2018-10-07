@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
@parent
ボード・ページ
@endsection

@section('content')
<table>
  <form action="" method="post">
    {{csrf_field()}}
    <tr>
      <th>
        person_id:
      </th>
      <td>
        <input type="number" name="person_id" />
      </td>
    </tr>
    <tr>
      <th>
        title:
      </th>
      <td>
        <input type="text" name="title" />
      </td>
    </tr>
    <tr>
      <th>
        message:
      </th>
      <td>
        <input type="text" name="message" />
      </td>
    </tr>
    <tr>
      <th>

      </th>
      <td>
        <input type="submit" value="send" />
      </td>
    </tr>
  </form>
</table>
@endsection

@section('footer')
copyright 2018 mito.
@endsection
