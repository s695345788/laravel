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
        'headers'=> [
            ':authority'=>'www.amazon.co.jp',
            ':method'=>'GET',
            ':path'=>'/gp/yourstore/home?ie=UTF8&ref_=nav_signin',
            ':scheme'=>'https',
            'accept'=>'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
            'accept-encoding'=>'gzip, deflate, br',
            'accept-language'=>'zh-CN,zh;q=0.9',
            'cache-control'=>'max-age=0',
            'cookie'=>'session-id=358-3455784-0269633; path=/; domain=.amazon.co.jp; Expires=Tue, 01 Jan 2036 08:00:01 GMT;session-id-time=2082787201l; path=/; domain=.amazon.co.jp; Expires=Tue, 01 Jan 2036 08:00:01 GMT;i18n-prefs=JPY; path=/; domain=.amazon.co.jp; Expires=Tue, 01 Jan 2036 08:00:01 GMT;',
            //'referer'=>'https://www.amazon.co.jp/ap/cvf/request?arb=91fd9c42-2ec2-4dbf-9473-c0723fccd04d',
            //'upgrade-insecure-requests'=>'1',
            'user-agent'=>'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36',
        ]
    ])->find('#feature-bullets ul li')->texts();
    print_r($res);
    return view('welcome');
});
