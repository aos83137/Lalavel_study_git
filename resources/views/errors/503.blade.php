<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <STYLE>

    </STYLE>
</head>
<body>
    <H1>503 error....</H1>
    <h1>
        <?= isset($greeting) ? "{$greeting} " : 'Hello ' ; ?><?= $name; ?>
    </h1>
    <h1>{{ $greeting or 'hello ' }} {{ $name or ' '}}</h1>
    <!-- HTML주석 안에서 {{$name}}을 출력합니다. -->
    {{-- 블레이드 주석 안에서 {{ $name}}을 출력합니다--}}
    
    @if ($itemCount = count($items))
        <p>{{ $itemCount }}종류의 과일이 있습니다.</p>
    @else
        <p>엥 아무것도 없어용</p>
    @endif
    
    <ul>
        @foreach ($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <ol>
        @forelse ($items as $item)
            <li>{{ $item }}</li>
        @empty
            <p>없다리</p>
        @endforelse
    </ol>
</body>
</html>