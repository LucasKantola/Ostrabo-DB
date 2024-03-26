@include("../defaults/meta")
<link rel="stylesheet" href="{{asset("style/search.css")}}">
<link rel="stylesheet" href="{{asset("style/searchbar.css")}}">
</head>
<script>
function toggleAbstract(event, id) {
    event.stopPropagation();
    var abstractElement = document.getElementById('abstract-' + id);
    if (abstractElement.style.display === "none") {
        abstractElement.style.display = "block";
    } else {
        abstractElement.style.display = "none";
    }
}
</script>
<body>
    @include("../defaults/header")
    <main class="h100">
        @include("../defaults/searchbar")
        <div class="flex-column w100">
            <h2 class="r-head w100 flex-center">Visar resultat för:</h2>
            <h2 class="r-search w100 flex-center">"{{$search}}"</h2>
            <p class="r-amount w100 flex-center">Sökningen gav {{$searchRes}} träffar</p>
        </div>
        <div class="article-container flex-column flex-center">
            @forelse($results as $result)
                <article class="wh100 selectable">
                    <a href="{{route("show", $result->id)}}" class="h100 flex-row">
                        <div class="h100 flex-column">
                            <h2>{{$result->title}}</h2>
                            <h3>{{$result->subtitle}}</h3>
                            <div class="bottom">
                                <p class="author">{{$result->author." ".$result->class}}</p>
                                <p class="date">{{$result->date}}</p>
                            </div>
                        </div>
                    </a>
                    <div class="right flex-column h100">
                        <button class="abstract-button" onclick="toggleAbstract(event, <?php echo e($result->id); ?>)">Abstract &#x25BC;</button>
                        <div id="abstract-{{$result->id}}" class="abstract-dropdown" style="display: none;">
                            <p>{{$result->abstract}}</p>
                        </div>
                    </div>
                </article>
            @empty
                <p>Inga resultat hittades</p>
            @endforelse
        </div>
    </main>
    @include("../defaults/footer")
</body>