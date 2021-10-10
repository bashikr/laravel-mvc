@php
$request = request();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('head')

<body class="antialiased">
    <div>
        @include('navbar')
    </div>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-top py-4 sm:pt-0">
        <div class=" text-center container jumbotron w-50 bg-white text-dark">
            <main style="text-align: center;">
                <h1>Guess my number</h1>
                <p>It is game where you have to guess a hidden number between 1 and 100 to win</p>
                <p>You only have 6 tries otherwise you will lose.</p>
                <form method="post">
                    @csrf
                    <input type="submit" name="play" value="play" class="btn btn-primary">
                </form>
            </main>
        </div>
    </div>
</body>

</html>
