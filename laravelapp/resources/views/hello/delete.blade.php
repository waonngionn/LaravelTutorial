@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menubar')
  @parent
  Deleteページ
@endsection

@section('content')
<table>
  <tr>
    <th>
      Name
    </th>
    <th>
      Mail
    </th>
    <th>
      Age
    </th>
  </tr>
  <tr>
    <td>
      {{$form->name}}
    </td>
    <td>
      {{$form->mail}}
    </td>
    <td>
      {{$form->age}}
    </td>
  </tr>
</table>

<form action="" method="post">
  {{csrf_field()}}
  <input type="submit" value="delete" />
</form>
@endsection

@section('footer')
copyright 2018 mito.
@endsection
