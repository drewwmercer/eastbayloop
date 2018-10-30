<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @section('head')
        @include('layouts.partials.header')
    @show
</head>
<body>
    <div id="app">
        @section('navbar')
            @include('layouts.partials.navbar')
        @show

        @yield('content')

        @section('footer')
            @include('layouts.partials.footer')
            {{--@include('layouts.partials.modal')--}}
        @show
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/site.js') }}"></script>
    @yield('scripts')
</body>
</html>