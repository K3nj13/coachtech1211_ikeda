@extends('layouts.default')
<style>

  .content {
    width:100%;
  }

  form {
    width:55%;
  }

  th {
    color:black;
    padding:18px 0 18px 40px;
    text-align:left;
    width:90px;
    font-size:14px;
  }

  td {
    padding:18px 0 18px 40px;
    font-size:14px;
    text-align:left;
    border-radius:5px;
  }

  button {
    margin-left:270px;
    width:100px;
    height:30px;
  }

  .button__submit {
    background-color:black;
    color:white;
    border-radius:5px;
    display:block;
  }

  .button__revise  {
    background:white;
    text-decoration:underline;
    border:none;
    margin-top:2px;
    display:block;
  }

</style>

@section('title','内容確認')

@section('content')

<div class="content">
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
    <button name="regist" class="button__submit" type="submit" value="true">送信</button>
    <button name="back" class="button__revise" type="submit" value="true">修正する</button>
  </form>
</div>

@endsection