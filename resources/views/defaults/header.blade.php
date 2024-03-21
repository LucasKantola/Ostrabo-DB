<header>
        <div class="logo">  
            <img src="{{ asset('Uddevalla gymnasieskola logotyp.png') }}" alt="Uddevalla Gymnasieskola logotyp">
            <img src="{{ asset('O1-logo.png') }}" alt="Östrabo1 Uddevalla Gymnasieskola logotyp">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Hem</a></li>
                <li><a href="{{ url('/browse') }}">Utforska</a></li>
                <li><a href="#">Nytt arbete</a></li>
            </ul>
        </nav>
</header>