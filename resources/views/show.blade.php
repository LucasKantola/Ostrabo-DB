@include('../defaults/meta')
<link rel="stylesheet" href="{{asset("style/show.css")}}">
</head>
<body>
    @include('../defaults/header')
    <main class="h100 flex-column">
        <div class="left">
                <div class="titles">
                <h2>{{$data->title}}</h2>
                <h4>{{$data -> author}}</h4>
                <time datetime="{{$data -> publication_date}}">{{$data -> publication_date}}</time>
            </div>
        </div>
        <div class="right">
            @forelse(explode(",", $data->keywords) as $keyword)
                <span class="tag">{{$keyword}}</span>
            @empty
                <span class="tag"></span>
            @endforelse
        </div>

        <div class="abstract">
            <h3>Abstract:</h3>
            <p class="abstract-text">
                {{$data->abstract}}
            </p>   
        </div>
    </main>
    @include('../defaults/footer')
</body>
</html>