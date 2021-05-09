        <footer>
            <div class="container flex wrap">
                <div class="left">
                    <img src="{{asset('images/marchio-sito-test.png')}}" alt="logo-site-footer">
                    @foreach ($data['contacts'] as $key => $contact)
                        <p>{{$key}} {{$contact}}</p>
                    @endforeach
                </div>
                <div class="right flex wrap">
                  
                    @foreach ($data['footer_menus'] as $key => $menu)
                    <div class="footer_list">
                        <h3>{{$key}}</h3>  
                        <ul class="flex">
                            @foreach ($menu as $link)
                                <li><a href="#">{{$link}}</a></li>
                            @endforeach
                        </ul>
                    </div>
               
                    @endforeach
                </div>
            </div>
        </footer>
    </body>
</html>