<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link href="{{ asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
   
    <div class="container">
       <div class="row">
            @yield('content')
       </div>
    </div>
</body>
</html>