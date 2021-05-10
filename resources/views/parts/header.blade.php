<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    {{-- Font Open Sans --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Molisana</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="{{asset('images/marchio-sito-test.png')}}" alt="logo-site">
            </div>

            <div class="menu">
                <a href="#"> <i class="fas fa-bars"></i></a>
            </div>
            <nav>
                <ul>
                    <li><a href={{route('home')}} class="{{ Route::getCurrentRoute()->getName() ==  "home" ? 'active' : ''  }} flex">Home</a></li>
                    <li><a href={{route('prodotti',0)}} class="{{ Route::getCurrentRoute()->getName() ==  str_replace("http://localhost:8000/", "", route('prodotti',0)) ? 'active' : ''  }} flex">Prodotti</a></li>
                    <li><a href={{route('news')}} class="{{Route::getCurrentRoute()->getName() ==  str_replace("http://localhost:8000/", "", route('news')) ? 'active' : ''  }} flex">News</a></li> 
        

                </ul>
            </nav>
        </div>
    </header>
