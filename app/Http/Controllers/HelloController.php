<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
// body {
//     font-size: 16pt;
//     color: #999;
// }
// h1 {
//     font-size: 100pt;
//     text-align: right;
//     color: #eee;
//     margin: -40px 0px -50px px;
// }
// </style>
// EOF;

// $body = '</head><body>';
// $end = '</body></head>';

// function tag($tag, $txt) {
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

class HelloController extends Controller
{
//     public function index() {
// //     // public function index(Request $tes) {
// //         // return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
//         $deta = ['msg'=>'入力してください'];
//         return view('hello.index', $deta);
//     }
    
//     public function other() {
//         return '<html><body><h1>Hello</h1><p>This is other page.</p></body></html>';
//     }

//     //
// }

//     public function index($id='noname', $pass='unknown') {
//         return <<<EOF

// <html>
// <head>
// <style>
// body {
//     font-size: 16pt;
//     color: #999;
// }
// h1 {
//     font-size: 100pt;
//     text-align: right;
//     color: #eee;
//     margin: -40px 0px -50px px;
// }
// </style>
// </head>
// <body>
//     <h1>Index</h1>
//     <p>これは、Helloコントローラのindexアクションです。</p>
//     <ul>
//         <li>ID: {$id}</li>
//         <li>PASS: {$pass}</li>
//     </ul>
// </body>
// </html>
// EOF;
//     }

    
    // public function index() {
    //     global $head, $style, $body, $end;
        
    //     $html = $head . tag('title', 'Hello/Index') . $style . $body
    //     . tag('h1' , 'index') . tag('p', 'This is Index page')
    //     . '<a href="/hello/other">go to Other page</a>'
    //     . $end;
    // return $html;
    // }
    
    // public function other() {
    //     global $head, $style, $body, $end;
        
    //     $html = $head . tag('title', 'Hello/Other') . $style . $body
    //     . tag('h1', 'Other') . tag('p', 'this is Other page')
    //     . $end;
    // return $html;
//     // }

    
//     public function __invoke() {
//         return <<<EOF
        
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {
//     font-siza: 16pt;
//     color: #999;
// }
// h1{
//     font-size: 30pt;
//     text-align: right;
//     color: #eee;
//     margin: -15px 0px 0px 0px;
// }
// </style>
// </head>
// <body>
//     <h1>Single Action</h1>
//     <p>これは、シングルアクションコントローラのアクションです。</p>
// </body>
// </html>
// EOF;
//     }
    
    // public function post(Request $request)
    // {
    //     $msg = $request->msg;
    //     $date = [
    //         'msg'=>$msg
    //         ];
    //     return view('hello.index', $date);
    // }

//     public function index(Request $request, Response $response){
        
// $html = <<<EOF
// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body {
//     font-size: 16pt;
//     color: #999;
// }
// h1 {
//     font-size: 120pt;
//     text-align: right;
//     color: #fafafa;
//     margin: -50px 0px -120px 0px;
// }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <h3>Request</h3>
//     <pre>{$request}</pre>
//     <h3>Response</h3>
//     <pre>{$response}</pre>
// </body>
// </html>
// EOF;
//         $response->setContent($html);
//         return $response;
//     }
    
    // public function index()
    // {
    //     return view('hello.index');
    // }
    
    // public function index() {
    //     $deta = ['msg'=>'これはコントローラから渡されたメッセージです。'];
    //     return view('hello.index', $deta);
    // }
    
    // public function index(Request $request) {
    //     $data = [
    //         'msg'=>'これはコントローラから渡されたメッセージです。',
    //         'id'=>$request->id
    //         ];
            
    //     return view('hello.index', $data);
    // }
    
    // public function index() {
    //     $data = [
    //         'msg'=>'これはBladeを利用したサンプルです。',
    //         ];
    //         return view('hello.index', $data);
    // }
    
    // public function index() {
    //     #data = [
    //         'msg'=>'お名前を入力して下さい。',
    //     ];
    //     return view('hello.index, $date');
    // }
    

    
// public function index() {
//      $data = [
//          'msg'=>'入力してください。',
//          ];
//     return view('hello.index', $data);
//  }
    
//  public function post(Request $request) {
//      $msg = $request->msg;
//      $data = [
//          'msg'=>'こんにちは' . $msg . 'さん！',
//          ];
//      return view('hello.index', $data);
//  }
    
    // public function index() {
    //     return view('hello.index', ['msg'=>'']);
    // }
    
    // public function post(Request $request) {
    //     return view('hello.index', ['msg'=>$request->msg]);
    // }
    
    // public function index() {
    //     return view('hello.index');
    // }
    
    // public function post(Request $request) {
    //     return view('hello.index', ['msg'=>$request->msg]);
    // }
    
    // public function index() {
    //     return view('hello.index');
    // }
    
    // public function post(Request $request) {
    //     return view('hello.index', ['meg'=>$request->msg]);
    // }
    
    // public function index() {
    //     $data = ['one', 'two', 'three', 'four', 'five'];
    //     return view('hello.index', ['data'=>$data]);
    // }

}

