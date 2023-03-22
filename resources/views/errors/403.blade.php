<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forbidden</title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
</head>

<body class="py-5 md:py-0">
    <div class="container">
        <div class="error-page flex flex-col lg:flex-row items-center justify-center h-screen text-center lg:text-left">
            <div class="-intro-x lg:mr-20">
                <img alt="Midone - HTML Admin Template" class="h-48 lg:h-auto"
                    src="{{ asset('dist/images/error-illustration.svg') }}">
            </div>
            <div class="text-white mt-10 lg:mt-0">
                <div class="intro-x text-8xl font-medium">403</div>
                <div class="intro-x text-xl lg:text-3xl font-medium mt-5">Oops. Error forbidden request.</div>
                <div class="intro-x text-lg mt-3">You may have mistyped the address or the page may have moved.</div>
                <button
                    class="intro-x btn py-3 px-4 text-white border-white dark:border-darkmode-400 dark:text-slate-200 mt-10">Back
                    to Home</button>
            </div>
        </div>
    </div>
    {{-- <div data-url="main-light-error-page.html"
        class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
        <div class="dark-mode-switcher__toggle dark-mode-switcher__toggle--active border"></div>
    </div> --}}

    <script src="{{ asset('dist/js/app.js') }}"></script>
</body>

</html>