@section('head')
    @include('layouts.partials.header')
@show

<div id="app">
    @section('navbar')
        @include('layouts.partials.navbar')
    @show
    
    @yield('content')
</div>

@section('footer')
    @include('layouts.partials.footer')
@show