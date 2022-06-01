<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formula drivers</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    <header>
        <ul>
            <li><a href="{{route('index')}}">Main page</a></li>
            <li><a href="{{route('drivers')}}">List of drivers</a></li>
            <li><a href="{{route('standings')}}">Drivers championship table</a></li>
            <li><a href="{{route('penalty')}}">Penalty points</a></li>
            <li><a href="{{route('reprimends')}}">Reprimands</a></li>
            <li><a href="{{route('contracts')}}">Contract expirations this year</a></li>
        </ul>
    </header>
    <section>
        @yield('content')
    </section>
</body>
</html>