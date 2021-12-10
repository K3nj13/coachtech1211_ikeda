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
<form action="/find" method="GET">
  @csrf
  <input type="text" name="last_name" value="{{$last_name}}">
  <input type="date" name="from" >
  <span>~</span>
  <input type="date" name="until" >
  <input type="email" name="email" value="{{$email}}">
  <input type="submit" value="検索">
  <input type="reset" value='リセット'>
</form>

@if($people->count())

<table>
  <tr>
    <th>ID</th>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th>ご意見</th>
  </tr>
  @foreach ($people as $person)
  <tr>
    <td>{{$person->id}}</td>
    <td>{{$person->last_name}}</td>
    <td>{{$person->gender}}</td>
    <td>{{$person->email}}</td>
    <td class="opinion">{{$person->opinion}}</td>
    
      <form method="POST" action="{{ route('delete', $person->id)}}" onSubmit="return checkDelete()">
        @csrf
    <td>
      <button type="submit" onclick=>削除</button>
    </td>
  </tr>
  @endforeach
</table>
{{ $people->appends(request()->input())->links() }}


@else
<p>見つかりませんでした。</p>
@endif


<script>
  function checkDelete() {
    if(window.confirm('削除してよろしいでしょうか？')) {
      return true;
    } else {
      return false;
    }
  }
</script>
@endsection

