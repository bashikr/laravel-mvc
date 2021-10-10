<div class="d-block">
    <nav class="nav nav-pills nav-fill" style="font-weight:bolder; vertical-align: baseline;">
        <a style='width:20%;' href="{{ url('/home') }}"
            class="{{ Request::segment(1) === 'home' ? 'p-4 nav-item nav-link active' : 'p-4 nav-item nav-link' }}">Home</a>
        <a style='width:20%;' href="{{ url('/game21') }}"
            class="{{ Request::segment(1) === 'game21' ? 'p-4 nav-item nav-link active' : 'p-4 nav-item nav-link' }}">Game21</a>
        <a style='width:20%;' href="{{ url('/dice100') }}"
            class="{{ Request::segment(1) === 'dice100' ? 'p-4 nav-item nav-link active' : 'p-4 nav-item nav-link' }}">Dice100</a>
        <a style='width:20%;' href="{{ url('/start-guess') }}"
            class="{{ Request::segment(1) === 'start-guess' ? 'p-4 nav-item nav-link active' : 'p-4 nav-item nav-link' }}">Guess</a>
    </nav>
</div>
