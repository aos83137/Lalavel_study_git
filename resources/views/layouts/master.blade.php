<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('style')
    
    @yield('script')

</head> 
<body>
<h1>자식이여</h1>
@yield('content')
<h1>여기는 마스터 블레이드</h1>
@yield('foot')
</body>
</html>