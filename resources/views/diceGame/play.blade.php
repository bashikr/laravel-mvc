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
                @if (session('playersAmount') && session('dicesAmount'))
                    <p class="text-dark">{!! $data['playersHands'] !!}</p>
                @else
                    <p>Empty message.</p>
                @endif

                <p>The players' hands' sums:</p>
                @if (session('playersAmount') && session('dicesAmount'))
                    <p class="text-dark">{!! $data['playersHandSum'] !!}</p>
                @else
                    <p>Empty message.</p>
                @endif

                <form method="post">
                    @csrf
                    <input type="submit" name="play" value="Play" class="btn btn-primary">
                    <input type="submit" name="reset" value="Reset" class="btn btn-primary">
                </form>
            </div>
        </div>
</body>
