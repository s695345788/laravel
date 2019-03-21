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
     $data = QL\QueryList::get('https://www.amazon.co.jp/dp/B0782339QB',[],[
         ])->getHtml();

     $ql = \QL\QueryList::html($data)->encoding('utf-8','shift_jis')
     ->rules([
         'title'=>array('div','text'),
         'link'=>array('div','html')
     ]);

     dd($ql);die;

    dd($res->all());die;

});
Route::get('/e', function () {
    $data = QL\QueryList::get('https://www.amazon.co.jp/dp/B0782339QB',[],[
    ])->getHtml();

    $ql = \QL\QueryList::html($data)->encoding('utf-8','shift_jis')
        ->rules([
            'title'=>array('div','text'),
            'link'=>array('div','html')
        ])->queryData();

    dd($ql);die;

});
Route::get('/a',function (){
    $ql = QL\QueryList::get('https://www.baidu.com/s?wd=QueryList',[],[
//         'proxy' => 'http://127.0.0.1:1090',
    ])->getHtml();
   $newql = \QL\QueryList::html($ql,'shift_jis')->find('div');
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