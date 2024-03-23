<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link data-default-icon="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png" rel="icon" sizes="192x192" href="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
    {{-- Left Section --}}
    <header>
        @include('components.navbar')
    </header>

    {{-- Middle Section --}}

    <main>
        <section class="main">
            <div class="wrapper">
                @yield('main')
                @include('components.footer')
            </div>
    </section>
    </main>

    {{-- Right Section --}}

    <footer>

    </footer>

    @yield('scripts')
</body>
</html>