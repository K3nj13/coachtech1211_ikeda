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
@section('title', '検索')

@section('content')
    <table>
        <tr>
          <th>ID</th>
          <th>お名前</th>
          <th>性別</th>
          <th>メールアドレス</th>
          <th>ご意見</th>
        </tr>
        <tr>
          <td> {{$item->id}} </td>
          <td> {{$item->last_name}}{{$item->first_name}} </td>
          <td>{{$item->gender}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->opinion}}</td>
        </tr>
    </table>
@endsection