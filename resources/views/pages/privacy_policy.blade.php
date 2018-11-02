@extends('layouts.main-page')

@section('content')
<div>
    <h2>{{ $page->title }}</h2>
    <div>{!! $page->content !!}</div>
</div>
@endsection
