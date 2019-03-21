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
//    $a= 1;
     $data = QL\QueryList::get('https://www.amazon.co.jp/dp/B0782339QB',[],[
//         'proxy' => 'http://127.0.0.1:1090',
         ])->getHtml();
//     $data = trim($data);
//
////     dd($data);die;
     $ql = \QL\QueryList::html($data,'utf-8');
     dd($ql);die;
     $res = $ql->find('span')->texts();
////        ->queryData();
    dd($res->all());die;
//    file_put_contents('B0782339QB.html',$data);
//     dd($data);
//    return view('welcome');
});
Route::get('/a',function (){
    $ql = QL\QueryList::get('https://www.baidu.com/s?wd=QueryList',[],[
//         'proxy' => 'http://127.0.0.1:1090',
    ])->html('div');

    dd($ql);die;
    dd($data->all());die;

});
Route::get('/c',function (){
    $ql = QL\QueryList::get('https://www.amazon.co.jp',[],[
//         'proxy' => 'http://127.0.0.1:1090',
    ])->find('div');

    dd($ql);die;
    dd($data->all());die;

});
//
//Route::get('d',function (){
//    $client = new GuzzleHttp\Client();
//    $res = $client->request('GET', 'https://www.amazon.co.jp/dp/B0782339QB', [
//        'wd' => 'QueryList'
//    ]);
//    $html = (string)$res->getBody();
//
//    $data = QueryList::html($html)->find('h3')->texts();
//});