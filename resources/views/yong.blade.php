@extends('layouts.master')

@section('content')
    <p>저는 자식 뷰의 'content' 섹션입니다.</p>
@endsection

@section('style')   
    <style>
        body{background:green; color:white}
    </style>
@endsection

@section('foot')
    @include('subviews.footer')
@endsection

@section('script')
<script>
    alert ('자식의 스크립트')
</script>
@endsection


{{-- 자식 --}}