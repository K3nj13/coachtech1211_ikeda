@extends('layouts.default')
<style>

  .content {
    width:100%;
  }

  th {
    color:black;
    padding-left:40px;
    text-align:left;
    font-size:14px;
  }

  td {
    padding:8px 15px;
    text-align:left;
    border-radius:5px;
  }

  input {
    border:1px solid gray;
  }

  .sample_text {
    color:gray;
    font-size:14px;
    margin-top:5px;
    margin-left:8px;
  }

  span {
    color:red;
    margin-left:3px;
  }

  input.input__name {
    width:205px;
    height:25px;
    border-radius:4px;
    border-width:thin;
  }

  .sample_text--name {
    display:inline-block;
  }

  .sample_text--name:last-child {
    margin-left:150px;
  }

  .gender {
    font-size:14px;
    color:gray;
  }

  input.input__email {
    width:415px;
    height:25px;
    border-radius:4px;
    border-width:thin;
  }

  input.input__postcode {
    width:395px;
    height:25px;
    border-radius:4px;
    border-width:thin;
  }

  .sample_text--postcode {
    padding-left:22px;
  }

  .span__postcode {
    color:black;
    font-size:14px;
  }

  input.input__address {
    width:415px;
    height:25px;
    border-radius:4px;
    border-width:thin;
  }

  input.input__building {
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
    margin-left:310px;
  }

  .error {
    font-size:14px;
    color:red;
  }

</style>

<body>
  @section('title','お問い合わせ')

  @section('content')

  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  <div class="content">
    <form action="/confirm" class="h-adr" method="post">
      @csrf
      <table>
        <tr>
          <th>お名前<span>※</span></th>
          <td>
            <input type="text" class="input__name" name="last_name" value="{{old('last_name')}}">
            <input type="text" class="input__name" name="first_name" value="{{old('first_name')}}">
            <div>
              <div class="sample_text sample_text--name">例）山田</div>
              <div class="sample_text sample_text--name">例）太郎</div>
            </div>
            <div class="error">
              @error('last_name')
              {{$message}}
              @enderror
            </div>
            <div class="error">
              @error('first_name')
              {{$message}}
              @enderror
            </div>
          </td>
        </tr>    
        <tr>
          <th>性別<span>※</span></th>
          <td class="gender">
            <input class="gender__input" type="radio" name="gender" value="男性" checked>男性
            <input class="gender__input" type="radio" name="gender" value="女性" {{old('gender') == '女性' ? 'checked' : '' }}>女性
          </td>
        </tr>
        <tr>
          <th>メールアドレス<span>※</span></th>
          <td>
            <input type="email" class="input__email" name="email" value="{{old('email')}}">
            <div class="sample_text">例）text@example.com</div>
            <div class="error">
              @error('email')
              {{$message}}
              @enderror
            </div>
          </td>
        </tr>
        <span class="p-country-name" style="display:none;">Japan</span>
        <tr>
          <th>郵便番号<span>※</span></th>
          <td>
            <span class="span__postcode">〒</span>
            <input type="text" class="input__postcode p-postal-code" name="postcode" value="{{old('postcode')}}">
            <div class="sample_text sample_text--postcode">例）123-4567</div>
            <div class="error">
              @error('postcode')
              {{$message}}
              @enderror
            </div>
          </td>
        </tr>
        <tr>
          <th>住所<span>※</span></th>
          <td>
            <input type="text" class="input__address p-region p-locality p-street-address p-extended-address" name="address" value="{{old('address')}}">
            <div class="sample_text">例）東京都渋谷区千駄ヶ谷1-2-3</div>
            <div class="error">
              @error('address')
              {{$message}}
              @enderror
            </div>
          </td>
        </tr>
        <tr>
          <th>建物名</th>
          <td>
            <input type="text" class="input__building" name="building_name" value="{{old('building_name')}}">
            <div class="sample_text">例）千駄ヶ谷マンション101</div>
          </td>
        </tr>
        <tr>
          <th>ご意見<span>※</span></th>
          <td>
            <textarea name="opinion" id="" cols="55" rows="6">{{old('opinion')}}</textarea>
            <div class="error">
              @error('opinion')
              {{$message}}
              @enderror
            </div>
          </td>
        </tr>
      </table>
      <input type="submit" value="確認" class="button">
    </form>
  </div>

  @endsection  