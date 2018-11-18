<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vaguery</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @yield('css')

    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body id="app">

@yield('content')

@yield('js')

</body>
</html>
