<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google_api_client_id" content="{{ config('services.google.client_id') }}">
    <meta name="facebook_api_client_id" content="{{ config('services.facebook.client_id') }}">

    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">

    @yield('css')
</head>