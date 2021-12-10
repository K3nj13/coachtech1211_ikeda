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

    svg.w-5.h-5 {
    width: 30px;
    height: 30px;
    }

    .opinion {
      white-space:nowrap;
      overflow-x:hidden;
      text-overflow:ellipsis;
      width:200px;
      display:block;
    }

    .opinion:hover {
      white-space:normal;
    }

</style>
@section('title', '管理システム')

@section('content')
<table>
  <tr>
    <th>ID</th>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th>ご意見</th>
  </tr>
  @foreach ($items as $item)
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
    <td class="opinion">
      {{$item->opinion}}
    </td>
  </tr>
  @endforeach
</table>
{{ $items->links() }}
@endsection