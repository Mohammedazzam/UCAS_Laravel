<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
@yield('styles')
</head>
<body>

<div class="container">

    <header class="bg-light">
        <h1>Simple Twitter</h1>
        @auth
        Welcome, {{Auth::user()->name}} <!--حتى يظهر اسم المستخدم-->
        @endauth
    </header>

    <main>
        @yield('content')
    </main>
    <hr>
    <footer>
        <p>&copy;2019 Simple Twitter</p>
    </footer>

</div>
@yield('scripts')
</body>
</html>