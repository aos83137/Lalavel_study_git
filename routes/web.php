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
//         return view('errors.503')->with([
//             'name' => 'Foo',
//             'greeting' => '안녕하세요?',
//         ]); 
//         //view(): 뷰객체를 만들어 응답
//                     //인자 : 뷰파일 지정
//                     //      resources/views/뷰파일명.blade.php
//                     //      resources/views/welcome.blade.php 생김
// }); 
//with 보다는 view의 두번째 인자로 보내는 것을 많이씀
Route::get('/',
    function(){
        
        return view('welcome', [
            'name' => 'yongseok',
            'greeting' => '안녕   하세요?',
            'items' =>['딸기','망고','수박','등등']
        ]);
    });

Route::get('/d3_test',function(){
    return view('d3_test');
});
// Route::get('/',function(){
//     return view('errors.503');
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

// Route::get('/',[
//     "as"=>'alias',
//     function(){
//     return '여는 다른라운팅인데 이름이 alias이야!';
// }]);

// Route::get('/wdj',function(){
//     return redirect(route('alias'));
// });

// Route::get(
//     '/',
//     function(){
//         return view('errors.503');
//     }
// );

// Routue::get(
//     '/databind', 
// function(){
//     return view('yju-com') -> -=width;
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
//     $ss = ['딸기', '망고', '수박', '집','밥','먹','고','싶','다'];

//     return view('yjucom', ['items' => $ss]); //view(): 뷰객체를 만들어 응답

// }
// );

// Route::get('/yong',function(){
//     return view('yong');
// });

Route::resource('articles','ArticlesController');

Route::get('auth/login', function(){
    $credentials = [
        'email' => 'john@example.com',
        'password' => 'password'
    ];

    if(! auth() -> attempt($credentials)){//auth 인증 , attempt 시도
        return '로그인 정보가정확하지 않습니다.';
    }

    return redirect('protected');
});

Route::get('protected', function(){
    dump(session()-> all());
    // if(!auth() -> check()){
    //     return 'who are you?';
    // }

    return '어서 오세요'. auth()->user()->name;
});

Route::get('auth/logout', function(){
    dump(session()-> all());
    auth()->logout();

    return '또 봐용~~';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
