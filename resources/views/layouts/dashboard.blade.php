<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard &#8250; @yield('title', config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('dashboard.head')

</head>
<body>
<div id="dashboard">

    @include('dashboard.offsetnav')

    <main id="content">

@yield('content')

    </main>
</div>

@include('dashboard.footer')
@include('dashboard.scripts')

</body>
</html>
