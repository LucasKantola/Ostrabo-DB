@include("../defaults/meta")
<link rel="stylesheet" href="{{asset("style/search.css")}}">
<link rel="stylesheet" href="{{asset("style/searchbar.css")}}">
</head>
<script>
function toggleAbstract(event, id) {
    event.stopPropagation();
    var abstractElement = document.getElementById('abstract-' + id);
    if (abstractElement.style.maxHeight === "0px") {
        event.target.textContent = "Abstract \u25B2";
        abstractElement.style.maxHeight = abstractElement.scrollHeight + "px";
    } else {
        event.target.textContent = "Abstract \u25BC";
        abstractElement.style.maxHeight = "0px";
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
                <article class="w100 selectable">
                    <div class="w100 article-content flex-row">
                        <a href="{{route("show", $result->id)}}" class="article-left flex-column h100">
                            <h2>{{$result->title}}</h2>
                            <div class="bottom">
                                <p class="author">{{$result->author." ".$result->class}}</p>
                                <p class="date">{{$result->date}}</p>
                            </div>
                        </a>
                        <div class="article-right flex-column">
                            <div class="w100 tags-container">
                                @foreach($result->tags as $tag)
                                    <span class="tag">{{$tag->name}}</span>
                                @endforeach
                            </div>
                            <button onclick="toggleAbstract(event, <?php echo e($result->id); ?>)">Abstract &#x25BC;</button>
                        </div>
                    </div>
                    <div id="abstract-{{$result->id}}" style="max-Height: 0px" class="abstract-dropdown w100">
                        <p>{{$result->abstract}}</p>
                    </div>
                </article>
            @empty
                <p>Inga resultat hittades</p>
            @endforelse
        </div>
    </main>
    @include("../defaults/footer")
</body>