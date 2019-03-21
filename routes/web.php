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
     $data = str_replace('Shift_JIS','UTF-8',$data);
     $ql = \QL\QueryList::html($data);
    $res = $ql->htmls();
     dd($res);die;

    dd($res->all());die;

});
Route::get('/e', function () {
    $data = QL\QueryList::get('https://www.amazon.co.jp/dp/B0782339QB',[],[
    ])->getHtml();

    $ql = \QL\QueryList::html($data)
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
   $newql = \QL\QueryList::html($ql)->find('div');
    dd($newql);die;
    dd($data->all());die;

});
Route::get('/c',function (){
    $ql = QL\QueryList::get('https://www.amazon.co.jp',[],[
//         'proxy' => 'http://127.0.0.1:1090',
    ])->find('div');

    dd($ql);die;
    dd($data->all());die;

});

Route::get('/d',function (){
   $html = file_get_contents('B0782339QB.html');
   $html = str_replace('Shift_JIS','UTF-8',$html);
   $ql   = \QL\QueryList::html($html);
   $res  = $ql->find('.a-button-inner')->htmls();
   dd($res);
});