<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      /* font-size:16px;
      margin:5px; */
    }

    h1 {
      font-size:25px;
      color:black;
      letter-spacing:3px;
      margin:20px auto 0;
      
      margin-left:280px;
      margin-top:20px;
      /* text-align:left; */
    }

    .content {
      /* margin-top:5px; */
    }

  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  <div class="content">
    @yield('content')
  </div>
  
</body>
</html>