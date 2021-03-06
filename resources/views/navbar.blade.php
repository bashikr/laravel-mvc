<div class="d-block">
    <nav class="nav nav-pills nav-fill" style="font-weight:bolder; vertical-align: baseline;">
        <a style='width:15%;' href="{{ url('/home') }}"
            class="{{ Request::segment(1) === 'home' ? 'p-4 nav-item nav-link active' : 'p-4 nav-item nav-link' }}">Home</a>
        <a style='width:15%;' href="{{ url('/game21') }}"
            class="{{ Request::segment(1) === 'game21' ? 'p-4 nav-item nav-link active' : 'p-4 nav-item nav-link' }}">Game21</a>
        <a style='width:15%;' href="{{ url('/dice100') }}"
            class="{{ Request::segment(1) === 'dice100' ? 'p-4 nav-item nav-link active' : 'p-4 nav-item nav-link' }}">Dice100</a>
        <a style='width:15%;' href="{{ url('/start-guess') }}"
            class="{{ Request::segment(1) === 'start-guess' ? 'p-4 nav-item nav-link active' : 'p-4 nav-item nav-link' }}">Guess</a>
        <a style='width:15%;' href="{{ url('/books') }}"
            class="{{ Request::segment(1) === 'books' ? 'p-4 nav-item nav-link active' : 'p-4 nav-item nav-link' }}">Books</a>
        <a style='width:15%;' href="{{ url('/scores') }}"
            class="{{ Request::segment(1) === 'scores' ? 'p-4 nav-item nav-link active' : 'p-4 nav-item nav-link' }}">Highscore</a>
    </nav>
</div>
