<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
    @stack('styles')
</head>

<body>
    @include('layouts.navbar')


    <div>
        @yield('content')
    </div>


    @include('layouts.footer')

    @include('layouts.scripts')
    @stack('scripts')


<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

</body>

</html>

