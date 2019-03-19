<?php

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
    $url = 'https://www.amazon.co.jp/dp/B0782339QB';
    $res = \QL\QueryList::get($url , [] , [
//        'proxy' =>'http://127.0.0.1:1090',
        'headers'=> [
            'cache-control'=>'no-cache',
            'User-Agent'=>'PostmanRuntime/7.6.0',
            'Accept'=>"*/*",
            'Host'=>'www.amazon.co.jp',
            'accept-encoding'=>'gzip, deflate'
        ]
    ])->htmls();
    dump($res);
//    file_put_contents($res)
//    print_r($res);
//    return view('welcome');
});
