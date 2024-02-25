<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     {{-- alert2 --}}
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     {{-- jqury --}}
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    
    @include('partials.navigasi')
    
    <div class="content">
        @yield('container')
    </div>

    @include('partials.footer')
</body>
<script src="{{ asset('js/javascript.js') }}" ></script>
</html>