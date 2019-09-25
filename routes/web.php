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


// Route::get(
//     '/{tParam?}'
// ,function($tParam='bar') { //url파라미터 처리
//     return "<h1> {$tParam} 을 URL로 부터 받음 </h1>"; 

// }
// );
// Route::get(
//     '/',     //요청 경로(URL), GET /
//     function () { //요청처리함수, 콜백, 클로저
//         return view('welcome'); //view(): 뷰객체를 만들어 응답
//                     //인자 : 뷰파일 지정
//                     //      resources/views/뷰파일명.blade.php
//                     //      resources/views/welcome.blade.php 생김
// });

// Route::get(
//     '/yju'
// ,function() { //요청처리함수, 콜백, 클로저
//     return view('yjucom'); //view(): 뷰객체를 만들어 응답

// }
// );
// Route::get(
//     '/{tParam?}/test'
// ,function($tParam='bar') { //url파라미터 처리
//     return "<h1> {$tParam} 을 URL로 부터 받음 </h1>"; 

// }
// );

// Route::pattern('rich','[0-9a-zA-Z!]{4}'); //정규표현식

// Route::get(
//     '/{rich?}',function($rich='돈'){
//         return "{$rich} 부자";
//     }
// )-> where('rich','[0-9a-zA-Z!]{4}');

Route::get('/',[
    "as"=>'alias',
    function(){
    return '여는 다른라운팅인데 이름이 alias이야!';
}]);

Route::get('/wdj',function(){
    return redirect(route('alias'));
});
