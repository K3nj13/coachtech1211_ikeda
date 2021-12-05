@extends('layouts.default')
<style>
  th {
    color:black;
    padding:5px 40px;
    text-align:left;
  }

  td {
    padding:25px 40px;
    text-align:left;
    border-radius:5px;
  }

  input.name {
    width:200px;
    height:40px;
  }
  input.sex {
    transform:scale(3);
    width:40px;
  }
  input.form {
    width:420px;
    height:40px;
  }

  button {
    margin-left:350px;
    width:100px;
    height:30px;
  }

  .button2 {
    width:100px;
    height:30px;
    background-color:black;
    color:white;
    border-radius:5px;
    display:block;

  }

  .button3  {
    background:white;
    text-decoration:underline;
    border:none;
    margin-top:2px;
    display:block;

  }
</style>

@section('title','内容確認')
@section('content')

<form action="/thanks" method="post">
  @csrf
  <table>
    <tr>
      <th>お名前</th>
      <td>
        <span>{{$last_name}}</span>
        <span>{{$first_name}}</span>
        <input type="hidden" name="last_name" value="{{$last_name}}">
        <input type="hidden" name="first_name" value="{{$first_name}}">
      </td>
    </tr>
    <tr>
      <th>性別</th>
      <td>
        <span>{{$gender}}</span> 
        <input type="hidden" name="gender" value="{{$gender}}">
      </td>
    </tr>
    <tr>
      <th>メールアドレス</th>
      <td>
        <span>{{$email}}</span>
        <input type="hidden" name="email" value="{{$email}}">
      </td>
    </tr>
    <tr>
      <th>郵便番号</th>
      <td>
        <span>{{$postcode}}</span>
        <input type="hidden" name="postcode" value="{{$postcode}}">
      </td>
    </tr>
    <tr>
      <th>住所</th>
      <td>
        <span>{{$address}}</span>
        <input type="hidden" name="address" value="{{$address}}">
      </td>
    </tr>
    <tr>
      <th>建物名</th>
      <td>
        <span>{{$building_name}}</span>
        <input type="hidden" name="building_name" value="{{$building_name}}">
      </td>
    </tr>
    <tr>
      <th>ご意見</th>
      <td>
        <span>{{$opinion}}</span>
        <input type="hidden" name="opinion" value="{{$opinion}}">
      </td>
    </tr>
  </table>

  <button name="regist" class="button2" type="submit" value="true">送信</button>
  <button name="back" class="button3" type="submit" value="true">修正する</button>
</form>
@endsection