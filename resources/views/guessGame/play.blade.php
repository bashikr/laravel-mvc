
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
                <h1>Guess my number:</h1>

                <p>Guess a number between 1 and 100, you have {{$request->session()->get('tries')}} left.</p>

                @if($request->session()->get('res'))
                    <p>{!! $request->session()->get('res') !!}</p>
                @endif


                @if($request->session()->get('cheat') == true)
                    <p>{{ $request->session()->get('number') }}</p>
                @endif

                <p>{!! $request->session()->get('makeGuess') !!}</p>

                <form method="post">
                    @csrf
                    <input type="number" name="guess" autofocus class="border border-primary p-1 mr-1">

                    <input type="submit" name="doGuess" value="Make a guess" class="btn btn-primary">

                    <input type="submit" name="doInit" value="Play again" class="btn btn-primary">
                    <input type="submit" name="doCheat" value="Cheat" class="btn btn-primary">
                </form>
            </main>
        </div>
    </div>
</body>

</html>
