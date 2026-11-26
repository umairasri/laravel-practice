<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
</head>

<body>
    <header><strong>Learning Log</strong></header>
    @auth
        <form method="POST" action="/logout">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    @endauth
    <main>
        @yield('content')
    </main>
    <footer>Day 9 practice</footer>
</body>

</html>