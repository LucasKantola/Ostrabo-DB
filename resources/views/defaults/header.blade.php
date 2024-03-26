<header class="w100 flex-column">
        <a href="{{route("home")}}" class="logo w100 flex-center">
            <img src="{{ asset('Uddevalla gymnasieskola logotyp.png') }}" alt="Uddevalla Gymnasieskola logotyp">
            <img src="{{ asset('O1-logo.png') }}" alt="Östrabo1 Uddevalla Gymnasieskola logotyp">
        </a>
        <nav class="w100">
            <ul class="flex-center w100">
                <li class="h100"><a href="{{ route('home') }}" class="wh100 flex-center">Hem</a></li>
                <li class="h100"><a href="{{ url('/browse') }}" class="wh100 flex-center ">Utforska</a></li>
                <li class="h100"><a href="#" class="wh100 flex-center">Nytt arbete</a></li>
            </ul>
        </nav>
</header>