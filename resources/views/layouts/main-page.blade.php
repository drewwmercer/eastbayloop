@section('head')
    @include('layouts.partials.header')
@show

<div id="app">
    @section('navbar')
        @include('layouts.partials.navbar')
    @show
    
    @yield('content')


    @section('footer')
        @include('layouts.partials.footer')
    @show
</div>
<!-- Scripts -->
<script src="{{ asset('js/site.js') }}"></script>
@yield('scripts')