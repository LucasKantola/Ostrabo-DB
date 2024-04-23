@include('../defaults/meta')
<link rel="stylesheet" href="{{asset("style/show.css")}}">
</head>
<body>
    @include('../defaults/header')
    <main>
        <h1>{{$data}}</h1>
        <h2>{{$id}}</h2>
        <h1>{{$request}}</h1>
    </main>
</body>
</html>