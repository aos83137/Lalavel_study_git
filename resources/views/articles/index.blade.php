@extends('layouts.app')

@section('content')
<div class="container">
    <h1>포럼 글 목록</h1>
    <hr>
    <ul>
        @forelse ($articles as $article)
        <li>
            {{ $article->name }}
            <small>
                by {{ $article->email }}
            </small>
        </li>
        @empty
            <p>글이 없습니다.</p>
        @endforelse
    </ul>
    @if ($articles->count())
            <div class="center-block">
                {!! $articles->render() !!} 
            </div>
            
        @endif
</div>
        
        
    @endsection