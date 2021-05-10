@extends('layouts.main')

@section('content')


@php 
   $prodIndex = app('request')->input('index')  != null ? app('request')->input('index') : 0;
@endphp

<main class="flex prodotti">

    <div class="left_content flex">
        <a href="?index={{ $prodIndex-1 < 0 ?  count($data['paste'])-1 : $prodIndex-1}} "><i class="fas fa-chevron-left"></i></a>
    </div>

    <div class="center_content">
        <h2>{{$data['paste'][$prodIndex]['titolo']}}</h2>
        <div class="top_content" style="background-image: url({{$data['paste'][$prodIndex]['src-h']}}) ">
           
         </div>
         <div class="mid_content" style="background-image: url({{$data['paste'][$prodIndex]['src-p']}}) ">
          </div>
          <div class="bottom_content">
           
                 {!!  htmlspecialchars_decode($data['paste'][$prodIndex]['descrizione']) !!}
            
          </div>
    </div>
    <div class="right_content flex">
        <a href="?index={{ $prodIndex+1 > count($data['paste'])-1 ? 0 : $prodIndex +1 }} " ><i class="fas fa-chevron-right"></i></a>
    </div>
</main>

@endsection

