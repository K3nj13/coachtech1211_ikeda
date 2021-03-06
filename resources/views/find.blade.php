<style>

    .ttl {
      margin:20px auto;
      width:200px;
    }

    .content {
      width:100%;
    }

    .system {
      width:100%;
    }

    .form {
      margin:0 auto;
      width:90%;
      height:100px;
      border-top:2px solid black;
      border-right:2px solid black;
      border-left:2px solid black;
    }

    .search__name {
      font-size:12px;
      display:inline-block;
      margin:20px auto 5px 25px;
    }

    .search__name--name {
      margin-left:66px;
      width:250px;
    }

    .search__radio {
      font-size:12px;
      display:inline-block;
      margin-left:20px;
    }

    .search__radio--radio {
      margin-left:20px;
    }

    .search__date {
      font-size:12px;
      display:block;
      margin:15px auto 5px 25px;
    }

    .search__date--date:first-child {
      margin-left:66px;
    }

    .search__date--date {
      width:250px;
    }

    .between {
      margin:0 5px 0 5px;
    }

    .search__email {
      font-size:12px;
      display:block;
      margin:15px auto 5px 25px;
    }

    .search__email--email {
      margin-left:20px;
      width:250px;
    }

    .search {
      margin:15px auto 0;
      width:100px;
      color:white;
      background:black;
      border-radius:3px;
      display:block;
    }

    .reset {
      margin:0 auto 0;
      width:70px;
      border-bottom:1px solid black;
      display:block;
      background:transparent;
      border-top:none;
      border-right:none;
      border-left:none;
    }

    .table {
      margin-top:20px;
    }

    table {
      margin:auto;
      width:90%;
      border-collapse:collapse;
    }

    .tr {
      border-bottom:1px solid black;
    }

    th {
      text-align:left;
      padding: 0 30px;
      font-size:12px;
      padding-bottom:5px;
    }

    .th__opinion {
      width:500px;
    }

    td {
      padding: 5px 0 5px 30px;
      text-align: left;
      font-size:12px;
    }

    .form__reset {
      margin:0 auto;
      width:90%;
      height:100px;
      border-bottom:2px solid black;
      border-right:2px solid black;
      border-left:2px solid black;
    }

    .opinion {
      white-space:nowrap;
      overflow-x:hidden;
      text-overflow:ellipsis;
      width:380px;
      margin-top:8px;
      display:block;
    }

    .opinion:hover {
      white-space:normal;
    }

    .form__delete {
      margin-right:25px;
    }

    .form__delete--delete {
      color:white;
      background:black;
      border-radius:3px;
      font-size:12px;
      width:60px;
      margin:0 auto;
      display:block;
    }

    svg.w-5.h-5 {
    width: 20px;
    height: 15px;
    }

</style>

<body>
  <h2 class="ttl">??????????????????</h2>
  <div class="content">
    <div classs="system">
      <form action="/find" method="GET" class="form">
        @csrf
        <label class="search__name">
          ?????????<input  class="search__name--name" type="text" name="last_name" value="{{$last_name}}">
        </label>
        <label class="search__radio">??????
          <input class="search__radio--radio" name="gender" type="radio" value="??????" checked>??????
          <input class="search__radio--radio" name="gender" type="radio" value="??????">??????
          <input class="search__radio--radio" name="gender" type="radio" value="??????">??????
        </label>
        <label class="search__date">
          ?????????<input class="search__date--date" type="date" name="from" >
          <span class="between">~</span>
          <input class="search__date--date" type="date" name="until" >
        </label>
        <label class="search__email">
          ?????????????????????<input class="search__email--email" type="email" name="email" value="{{$email}}">
        </label>
        <input class="search" type="submit" value="??????">
      </form>
      <form action="/find" method="GET" class="form__reset">
        @csrf
        <button class="reset" type="sumbit" name="reset" >????????????</button>
      </form>
    </div>
    {{ $people->appends(request()->input())->links() }}
    <div class="table">
      @if($people->count())
      <table>
        <tr class="tr">
          <th class="th__id">ID</th>
          <th class="th__name">?????????</th>
          <th class="th__gender">??????</th>
          <th class="th__email">?????????????????????</th>
          <th class="th_opinion">?????????</th>
          <th></th>
        </tr>
        @foreach ($people as $person)
        <tr>
          <td>{{$person->id}}</td>
          <td>{{$person->last_name}}{{$person->first_name}}</td>
          <td>{{$person->gender}}</td>
          <td>{{$person->email}}</td>
          <td class="opinion">{{$person->opinion}}</td>
          <td>
            <form method="POST" class="form__delete" action="{{ route('delete', $person->id)}}" onSubmit="return checkDelete()">
            @csrf
              <button type="submit" class="form__delete--delete" onclick=>??????</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
      
      @else
      <p>?????????????????????????????????</p>
      @endif
    </div>
  </div>

<script>
  function checkDelete() {
    if(window.confirm('??????????????????????????????????????????')) {
      return true;
    } else {
      return false;
    }
  }
</script>

</body>

