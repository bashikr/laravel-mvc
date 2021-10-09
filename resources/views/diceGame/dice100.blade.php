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
            <h1>Dice 100</h1>
            <form method="post" action="gameForm">
                @csrf
                <label>Players:</label>
                <p><input type="number" name="playersAmount" min="2" max="5" required class="border border-primary"></p>

                <label>Dices:</label>
                <p><input type="number" name="dicesAmount" min="1" max="5" required class="border border-primary"></p>

                <p><input type="submit" value="Play" name="doit" class="btn btn-primary"></p>
            </form>
        </div>
    </div>
</body>

</html>
