<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

            <nav>
                <ul>
                    @foreach ($pages as $page)
                        @if ($loop->first)
                            <li><a href="/">{{$page}}</a></li>
                        @else
                             <li><a href="{{$page}}">{{$page}}</a></li>
                        @endif                        
                    @endforeach
                    
                    @include('parts.footer')
                </ul>
            </nav>
        </div>
    </header>
