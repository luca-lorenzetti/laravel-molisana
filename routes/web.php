<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $paste = config('paste');
    
    $pages = [
            'home',
            'prodotti',
            'news'
    ];
  
    $types = [];
    $contacts = ['Ragione sociale:'=>'La Molisana S.P.A.',
                'Sede Legale:'=>'Contrada Colle delle Alpi, 100/A 86100 Campobasso (CB)',
                'Pec:'=>'lamolisana@pec.it',
                'Tel:'=>'+39 08744981',
                'Fax:'=>'+39 0874629584',
                'numero verde'=>'800818081',
                'telefono' => '3801292455'
                ];

    $footer_menus = config('menu_footer');

  foreach ($paste as $pasta) {

    if( !in_array($pasta['tipo'],$types) ){
        $types[] = $pasta['tipo'];
    }
  }

  $data= [
        'types'=>$types,
        'paste' => $paste,
        'pages' => $pages,
        'contacts' => $contacts,
        'footer_menus' => $footer_menus
  ];
    return view('home',[
        'data'=>$data
        ]);
})->name("home");


Route::get('prodotti/{index}', function ($index) {
    $paste = config('paste');
    
    $pages = [
            'home',
            'prodotti',
            'news'
    ];
  
    $types = [];
    $contacts = ['Ragione sociale:'=>'La Molisana S.P.A.',
                'Sede Legale:'=>'Contrada Colle delle Alpi, 100/A 86100 Campobasso (CB)',
                'Pec:'=>'lamolisana@pec.it',
                'Tel:'=>'+39 08744981',
                'Fax:'=>'+39 0874629584',
                'numero verde'=>'800818081',
                'telefono' => '3801292455'
                ];

    $footer_menus = config('menu_footer');

  foreach ($paste as $pasta) {

    if( !in_array($pasta['tipo'],$types) ){
        $types[] = $pasta['tipo'];
    }
  }

  $data= [
        'types'=>$types,
        'paste' => $paste,
        'pages' => $pages,
        'contacts' => $contacts,
        'footer_menus' => $footer_menus
  ];
  return view('prodotti',[
    'data'=>$data
    ]);
})->where('index','[0-9]+')->name('prodotti');

Route::get('/news', function () {
    $paste = config('paste');
    
    $pages = [
            'home',
            'prodotti',
            'news'
    ];
  
    $types = [];
    $contacts = ['Ragione sociale:'=>'La Molisana S.P.A.',
                'Sede Legale:'=>'Contrada Colle delle Alpi, 100/A 86100 Campobasso (CB)',
                'Pec:'=>'lamolisana@pec.it',
                'Tel:'=>'+39 08744981',
                'Fax:'=>'+39 0874629584',
                'numero verde'=>'800818081',
                'telefono' => '3801292455'
                ];

    $footer_menus = config('menu_footer');

  foreach ($paste as $pasta) {

    if( !in_array($pasta['tipo'],$types) ){
        $types[] = $pasta['tipo'];
    }
  }

  $data= [
        'types'=>$types,
        'paste' => $paste,
        'pages' => $pages,
        'contacts' => $contacts,
        'footer_menus' => $footer_menus
  ];
  return view('news',[
    'data'=>$data
    ]);
})->name("news");