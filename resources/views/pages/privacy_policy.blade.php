@extends('layouts.main-page')

@section('content')
<div class="container">
    <h2>{{ $page->title }}</h2>
    <div>{!! $page->content !!}</div>
</div>
@endsection
