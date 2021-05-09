@include('parts.header')


@php 
   $prodIndex = app('request')->input('index')  != null ? app('request')->input('index') : 0;
@endphp

<main class="flex prodotti">

    <div class="left_content flex">
        <a href="?index={{ $prodIndex-1 < 0 ?  count($data['paste'])-1 : $prodIndex-1}} "><i class="fas fa-chevron-left"></i></a>
    </div>

    <div class="center_content">
        <div class="top_content" style="background-image: url({{$data['paste'][$prodIndex]['src-h']}}) ">
            <h2>{{$data['paste'][$prodIndex]['titolo']}}</h2>
         </div>
         <div class="mid_content" style="background-image: url({{$data['paste'][$prodIndex]['src-p']}}) ">
          </div>
          <div class="bottom_content">
              <p>
                 {!! $data['paste'][$prodIndex]['descrizione'] !!}
              </p>
          </div>
    </div>
    <div class="right_content flex">
        <a href="?index={{ $prodIndex+1 > count($data['paste'])-1 ? 0 : $prodIndex +1 }} " ><i class="fas fa-chevron-right"></i></a>
    </div>
</main>

@include('parts.footer')

