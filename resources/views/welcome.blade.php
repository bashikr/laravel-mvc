<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('head')

<body class="antialiased">
    <div>
        @include('navbar')
    </div>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-top py-4 sm:pt-0">
        <div class="text-center" style="color: white;">
            <h1>Hello World!</h1>
            <p>This website is a part of the MVC course given at Blekinge Institute of Technology</p>

            <div class=" container jumbotron w-50 bg-white text-dark">
                <img class="w-100" src="{{URL::asset('assets/image/laravel.jpg')}}" alt="Laravel">
            </div>
        </div>
    </div>
</body>

</html>
