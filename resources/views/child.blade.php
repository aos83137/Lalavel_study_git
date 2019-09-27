@extends('layouts.master')

@section('style')
    <style>
        body {background: green; color: white;}
    </style>
@endsection

@section('script')
    @parent
    <script>
        alert('저는 자식 뷰의 \'script\'섹션입니다.')
    </script>
@endsection
@section('content')
    <p>저는 자식 뷰의 'content' 섹션입니다.</p>
@endsection

@section('footer')
    @include('partials.footer')
@endsection