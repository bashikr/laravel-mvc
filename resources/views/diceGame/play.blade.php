@php
$request = request();
@endphp
@include('head')

<body class="antialiased">
    <div>
        @include('navbar')
        <div
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-top py-4 sm:pt-0">
            <div class=" text-center container jumbotron w-50 bg-white text-dark">

                <h3>Dice game 100</h3>

                <p>The players' initial throw:</p>
                <p class="text-dark">{!! $request->session()->get('playersHands') !!}</p>

                <p>The players' hands' sums:</p>
                <p class="text-dark">{!! $request->session()->get('playersHandSum') !!}</p>

                @if (is_int($app->session->get('firstPlayer')))
                    <p>Player <?= $app->session->get('firstPlayer') ?> will start playing</p>
                    <br>
                @else
                    <?= $request->session()->get('firstPlayer') ?>
                @endif

                <form method="post">
                    @csrf
                    <input type="submit" name="reset" value="Reset" class="btn btn-primary">
                    <input type="submit" name="play" value="Play" class="btn btn-primary">
                </form>
            </div>
        </div>
</body>
