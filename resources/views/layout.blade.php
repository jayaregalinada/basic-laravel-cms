<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @yield('head')

</head>
<body>
<div id="app">

    @yield('body-pre')

    @yield('content')

</div>

    @yield('body-post')

</body>
</html>
