<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top d-flex bg-white">
            <div class="container">
                <div class="dc-logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
                <div class="">
                    <ul class="navbar nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">CHARACTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">COMICS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MOVIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SHOP</a>
                        </li>
                    </ul>
                </div>
                <div class="search">
                        <input type="search" placeholder="Search" class="rounded">
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="" class="img-fluid">
        </div>
    </header>
</body>

</html>