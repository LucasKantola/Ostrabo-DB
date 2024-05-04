@include('../defaults/meta')
<link rel="stylesheet" href="{{asset("style/show.css")}}">
</head>
<body>
    @include('../defaults/header')
    <main>
        <img src="{{asset($data->images)}}" alt="">
    </main>
    @include('../defaults/footer')
</body>
</html>