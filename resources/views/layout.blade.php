<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Taller de Laravel - @yield('title') </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light bg-faded">
                <h1>Bienvenido a LaraJobs</h1>
            </nav>
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
