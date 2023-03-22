<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME'). ' - ' .$title }}</title>

    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />

</head>

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3"> Enigma </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                        src="{{ asset('dist/images/illustration.svg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        A few more clicks to
                        <br>
                        sign in to your account.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your
                        e-commerce accounts in one place</div>
                </div>
            </div>

            @yield('content')

        </div>
    </div>
    {{-- <div data-url="login-light-login.html"
        class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
        <div class="dark-mode-switcher__toggle dark-mode-switcher__toggle--active border"></div>
    </div> --}}

    <script src="{{ asset('dist/js/app.js') }}"></script>
</body>

</html>