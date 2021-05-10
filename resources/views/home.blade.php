@extends('layouts.main')

@section('content')
    
<main class="home">
    <div class="container">

        @foreach ($data['types'] as $type)
            <div class="type">
                <div class="title_type">
                    <h2>{{$type}}</h2>
                </div>
            
                <div class="cards flex wrap">
                    @foreach ($data['paste'] as $index => $pasta)
                    @if ($pasta['tipo'] == $type)

                        <a href="{{route('prodotti',$index)}}" class="card">
                            <img src="{{asset($pasta['src'])}}" alt="{{$pasta['titolo']}}">
                        </a>

                    @endif
                @endforeach
                </div>
       
            </div>
        @endforeach
    </div>
</main>
@endsection

