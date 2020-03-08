<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Style Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">

</head>

<!-- BODY -->

<body>



    <div class="column is-half">
        <h1 class="title">Welcome to my new website</h1>
    </div>

    <nav class="navbar">
        <a href="/" class="navbar-item">Home</a>
        <a href="/contact" class="navbar-item">Contact Us</a>
        <a href="/about" class="navbar-item">About Us</a>
        <a href="/projects" class="navbar-item">Projects</a>
        <a href="/projects/create" class="navbar-item">Create New Project</a>
    </nav>

    <div class="column is-half">
        @yield('content')
    </div>



</body>
</html>


