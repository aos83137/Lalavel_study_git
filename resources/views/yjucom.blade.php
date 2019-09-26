<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>새로운 뷰!</h1>
    
    @if($itemCount = count($items))
        <p>{{$itemCount}} 종류의 과일이 있습니다.</p>
        <!-- <p>{{$items[0]}}</p> -->
        @foreach($items as $item)
            <li>{{$item}}</li>
        @endforeach
    @else
        <p>엥 ~   아무것도 없엉   </p>
    @endif
</body>
</html>