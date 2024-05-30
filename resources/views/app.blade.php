<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <h1>this is header</h1>
    </header>
    <main>
        @yield('content')
        <a href="{{route('comics.index')}}">go to index</a>
    </main>
    <footer>
        <h1>this is footer</h1>
    </footer>
</body>

</html>