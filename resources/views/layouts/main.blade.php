<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME'). ' - ' .$title }}</title>

    <link rel="stylesheet" href="dist/css/app.css" />

</head>

<body class="py-5 md:py-0">

    {{-- Navbar --}}
    @include('layouts.components.navbar')

    {{-- Menu --}}
    @include('layouts.components.menu')

    {{-- Content --}}
    @yield('content')

    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=dqdbeBBywhb&libraries=places"></script> --}}
    <script src="{{ asset('dist/js/app.js') }}"></script>

</body>

</html>