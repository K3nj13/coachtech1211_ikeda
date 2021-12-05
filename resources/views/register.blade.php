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
    background:black;
    margin-left:350px;
    color:white;
    border-radius:4px;
    width:150px;
    height:40px;

  }

  span {
    color:red;
  }

  .submit {
    margin-left:350px;

  }
  input.input1 {
    width:205px;
    height:25px;
    border-radius:4px;
    border-width:thin;
  }
   input.input2 {
    width:395px;
    height:25px;
    border-radius:4px;
    border-width:thin;
  }

   input.input3 {
    width:415px;
    height:25px;
    border-radius:4px;
    border-width:thin;
  }

  .button {
    width:100px;
    height:30px;
    background:black;
    color:white;
    border-radius:5px;
  }

  .smaple_text {
    color:gray;
    padding:7px 0 5px 10px;
  }
</style>

<body>
  @section('title','お問い合わせ')

  @section('content')
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  <form action="/confirm" class="h-ard" method="post">
    @csrf
    <table>
      <tr>
        <th>お名前<span>※</span></th>
        <td>
          <input type="text" class="input1" name="last_name" value="{{old('last_name')}}">
          <input type="text" class="input1" name="first_name" value="{{old('first_name')}}">
          <br>
          <div class="sample_text">例）山田　　　　　例）太郎</div>
        </td>
      </tr>
  

      <tr>
        <th>性別<span>※</span></th>
        <td>
          <input type="radio" name="gender" value="男性" checked>男性
          <input type="radio" name="gender" value="女性" {{old('gender') == '女性' ? 'checked' : '' }}>女性
        </td>
      </tr>
    
     

      <tr>
        <th>メールアドレス<span>※</span></th>
        <td>
          <input type="email" class="inout3" name="email" value="{{old('email')}}">
          <br>
          <div class="sample_text">例）text@example.com</div>
        </td>
      </tr>
      

      <span class="p-country-name" style="display:none">Japan</span>
      <tr>
        <th>郵便番号<span>※</span></th>
        <td>
          <label for="">〒</label>
          <input type="text" class="input2 p-postal-code" name="postcode" value="{{old(postcode)}}">
          <br>
          <div class="sample_text">例）123-4567</div>
        </td>
      </tr>
     
      <tr>
        <th>住所<span>※</span></th>
        <td>
          <input type="text" class="input3 p-region p-locality p-street-address p-extended-address" name="address" value="{{old('address')}}">
          <br>
          <div class="sample_text">例）東京都渋谷区千駄ヶ谷1-2-3</div>
        </td>
      </tr>
     

      <tr>
        <th>建物名</th>
        <td>
          <input type="text" class="input3" name="building_name" value="{{old('building_name')}}">
          <br>
          <div class="sample_text">例）千駄ヶ谷マンション101</div>
        </td>
      </tr>

      <tr>
        <th>ご意見</th>
        <td>
          <textarea name="opinion" id="" cols="60" rows="8">{{old('opinion')}}</textarea>
        </td>
      </tr>

      
    </table>
    <input type="submit" value="確認" class="button2 submit">
  </form>
  @endsection
</body>