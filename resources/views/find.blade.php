@extends('layouts.default')
<style>
    th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
</style>
@section('title', '管理システム')

@section('content')
<form action="find" method="POST">
  @csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="検索">
  <input type="reset" value='リセット'>
</form>
@if (@isset($item))
<table>
  <tr>
    <th>ID</th>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th>ご意見</th>
  </tr>
  <tr>
    <td>
      {{$item->id}}
    </td>
    <td>
      {{$item->last_name}}{{$item->first_name}}
    </td>
    <td>
      {{$item->gender}}
    </td>
    <td>
      {{$item->email}}
    </td>
    <td>
      {{$item->opinion}}
    </td>
  </tr>
</table>
@endif

@endsection