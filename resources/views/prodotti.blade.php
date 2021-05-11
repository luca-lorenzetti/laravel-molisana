@extends('layouts.main')

@section('content')


<main class="flex prodotti">

    <div class="left_content flex">
         <a href="{{ $data['pasta']['id']-1 < 0 ?  count($data['paste'])-1 : route('prodotti',$data['pasta']['id']-1)}} "><i class="fas fa-chevron-left"></i></a> 
    </div>

    <div class="center_content">
        <h2>{{$data['pasta']['titolo']}}</h2>
        <div class="top_content" style="background-image: url({{$data['pasta']['src-h']}}) ">
           
         </div>
         <div class="mid_content" style="background-image: url({{$data['pasta']['src-p']}}) ">
          </div>
          <div class="bottom_content">
           
                 {!!  htmlspecialchars_decode($data['pasta']['descrizione']) !!}
            
          </div>
    </div>
    <div class="right_content flex">
        <a href="{{ $data['pasta']['id']+1 > count($data['paste'])-1 ? route('prodotti',0) : route('prodotti',$data['pasta']['id'] +1) }} " ><i class="fas fa-chevron-right"></i></a> 

        {{-- <a href="?index={{ $prodIndex+1 > count($data['paste'])-1 ? 0 : $prodIndex +1 }} " ><i class="fas fa-chevron-right"></i></a> --}}
    </div>
</main>

@endsection

