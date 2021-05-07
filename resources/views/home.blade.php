@include('parts.header')

<main>
    <div class="container">

        @foreach ($data['types'] as $type)
            <div class="type">
                <div class="title_type">
                    <h2>{{$type}}</h2>
                </div>
            
                <div class="cards flex wrap">
                    @foreach ($data['paste'] as $pasta)
                    @if ($pasta['tipo'] == $type)
                        <div class="card">
                            <img src="{{asset($pasta['src'])}}" alt="{{$pasta['titolo']}}">
                        </div>
                    @endif
                @endforeach
                </div>
       
            </div>
        @endforeach
    </div>
</main>


@include('parts.footer')