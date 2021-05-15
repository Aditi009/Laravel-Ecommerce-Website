<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

@include('partials.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" integrity="sha512-ZfKn7az0YmtPUojZnRXO4CUdt3pn+ogBAyGbqGplrCIR5B/tQwPGtF2q29t+zQj6mC/20w4sSl0cF5F3r0HKSQ==" crossorigin="anonymous" />
</head>
<script>
    $(function() {
        AOS.init();
    });
</script>
<body>
    <div id='app'>
        @include('partials.nav')
        <div class="" style="margin-top: {{ Request::is('/') ? '-1.3em' : '2em' }}">
            @include('partials.session')
            @include('partials.errors')
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
</body>
@yield('scripts')
</html>
