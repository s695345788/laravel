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
    $res = \QL\QueryList::get($this->url , [] , [
        'headers'=> [
            ':authority'=>'www.amazon.co.jp',
            ':method'=>'GET',
            ':path'=>'/gp/yourstore/home?ie=UTF8&ref_=nav_signin',
            ':scheme'=>'https',
            'accept'=>'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
            'accept-encoding'=>'gzip, deflate, br',
            'accept-language'=>'zh-CN,zh;q=0.9',
            'cache-control'=>'max-age=0',
            'cookie'=>'__utma=62162931.2025437423.1552446730.1552446730.1552446730.1; __utmz=62162931.1552446730.1.1.utmccn=(organic)|utmcsr=baidu|utmctr=|utmcmd=organic; session-id=357-6278486-6974561; ubid-acbjp=358-8405576-1644318; i18n-prefs=JPY; skin=noskin; session-token="kleKoxe8oK1ty3TY2P2qEjLP9A5W2gupeheVSzV2tcAfwkCdzH5pXgmPPnvwW+mQ7RQvVJWdsiVT6zaCHSwixBbssgx2ki2mt4lDNBUsiK6x8baMCLQrBraEJmqKIgh9KD+K7B2wKRvFYsKh9T6SBZaUfisPRP1UdkAoHloANfquRT07pQJIGSi1ir1sNUHi4qnGt7B3qhlgdCWC0k9Ly4pcaAAAd9jQyK7rjqeuKno="; x-acbjp=U7bFW7VSxmUBJUbdx2hBngOuXanLTFoISvlBFamkUd2NJRHyZvNZwbLzAf40WAlr; at-acbjp=Atza|IwEBILijnnPM1GKV20j0mZKu4BGJgeeS9N5RmcRDK3e4OAkL1RAsJsfPI19EY9HGTtgHctrMumOCDvxslLy7uX61H6MjwS0yVysTPYvkaPj8yZB-yLPUl1A8uxu9CJQKXCVTEs0MFDBKB3kxoCtHjoskpuBZuwsiSAEt42tvZ1-zCrwgJJrPBgRO2PgaMfCDqEOkZxis7DGJldVzsKLeAu82Uq5aUFCxI2ZbSysFCUPlcH8tjbPuFEUvrZ8dKpoqJSrg3bwDwfWBnF--sC2BoJXmOLOLE_GhaxSozt7oR8P12lEQ_3WQr___EcshXnuY7FNk6dYcHVh5wJDQzpr87JJJwj0yOX8cNF6a3wFvo24poW08TERSaUa-Xwv_zmPX9Z0thvC_0jujlXXcddSH7QkMSaYb; sess-at-acbjp="woIUbjXlf5pNq8L8D1kjqOt3gQzw0FN7wF19q0P470c="; sst-acbjp=Sst1|PQGy0kwFIJLCVxGUf3-az17jC_LA10OFLA-llhgy7mHRTI5JfyBe0LffaY4zXeFQIsRus8TpR-0cSsyEhpxCa4YaPLWi7urFYZxbxirtBFKXMn1JKaZfQZxWh1CcEfFZuckmuahhITA7fuBgf_sfrd74dl0vd2pBWeuVV8F-_c8UqiiEB2C1lIkQkPfpxnfLWoh6YMFy8xuEQnEfIA6K3Jp6yhoRt4MsOtCmYw6MQO8qPemVa4Ood3SPhtsJK4Q9XFI8SxhlS8L-DE6rF_Wc31r8rNTJ1uK6HaK7EmS3Rlk-htlebfTryNZn4ZDuZXAiWtuPn6WXJAg1Us5ADmiKFZM10A; x-wl-uid=1APXmP2Ge4JmeBVOdNUpx0m1acIu39WaH44r7g6CW7JRoa2/P+PTCKnpfAO8W68nmEZSVSiM9ThrckceY+kpSTivUPW7iZFPqFMhKKu4ArlHI2FHizVKWdb040slvD4KYBJjHPIZi9iQ=; session-id-time=2082726001l; csm-hit=tb:YX6T0DNFMVPF6DTAX27Q+s-YX6T0DNFMVPF6DTAX27Q|1552903563256&t:1552903563256&adb:adblk_no',
            //'referer'=>'https://www.amazon.co.jp/ap/cvf/request?arb=91fd9c42-2ec2-4dbf-9473-c0723fccd04d',
            //'upgrade-insecure-requests'=>'1',
            'user-agent'=>'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36',
        ]
    ])->find('#feature-bullets ul li')->texts();
    print_r($res);
    return view('welcome');
});
