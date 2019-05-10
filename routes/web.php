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
// 初期表示
Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello/{msg?}',function ($msg='no message.') {
//      return '<html><body><h1>Hello</h1><p>This is sample page.'.$msg.'</p></body></html>';
// });
// Route::get('hello', 'HelloController@index');
// Route::get('hello/{id?}', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');

// Route::get('hello',function() {
//     return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
// });

// Route::get('hello/{msg?}',function ($msg='no message.')  {
    
// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {
//     font-size: 16pt;
//     color: #999;
// }
// h1 {
//     font-size: 100pt;
//     text-align: right;
//     color: #eee;
//     margin : -40px 0px -50px 0px;
// }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>{$msg}</p>
//     <p>{$msg2}</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;


//     return $html;
// });

// Route::get('hello/{id?}/{pass?}', 'HelloController@index');

// Route::get('hello', 'HelloController@index');
// Route::post('hello', 'HelloController@post');


// Route::get('hello/other', 'HelloController@other');

// Route::get('hello', 'HelloController');

// Route::get('calc/{num1}/{num2}/{num3}', 'CalcController@index');



// Route::get('hello', function() {
//     return view('hello.index');
// });

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');
Route::post('hello', 'HelloController@id');