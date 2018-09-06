@section('head')
    @include('layouts.partials.header')
@show

@section('navbar')
    @include('layouts.partials.navbar')
@show

<div id="app">
    @yield('content')
</div>

@section('footer')
    @include('layouts.partials.footer')
@show