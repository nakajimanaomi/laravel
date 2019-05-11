<html>
<head>
  <title>Hello/Index</title>
  <style>
  body {
      font-size: 16pt;
      color:#999;
  }
    h1 {
        font-size: 50px;
        text-align: right;
        color: #f6f6f6;
        margin: -20px 0px -30px 0px;
        letter-spacing: -4pt;
    }
  </style>
</head>
<body>
<!--
<h1>Blade/Index</h1>
<p>{{$msg}}</p>
<form method="POST" action="/hello">
    {{ csrf_field() }}
    <label for="namae">お名前:</label>
    <input type="text" name="msg"><br>
    <label for="id">id:</label>
    <input type="text" name="id"><br>
    <input type="submit">
</form>


<h1>Blade/Index</h1>
@if ($msg !='')
<p>こんちには、{{$msg}}さん。</p>
@else
<p>何か書いて下さい。</p>
@endif
<form method="POST" action="/hello">
    {{ csrf_field() }}
    <input type="text" name="msg">
    <input type="submit">
</form>


<h1>Blade/Index</h1>
@isset ($msg)
<p>こんちには、{{$msg}}さん。</p>
@else
<p>何か書いて下さい。</p>
@endisset
<form method="POST" action="/hello">
    {{ csrf_field() }}
    <input type="text" name="msg">
    <input type="submit">
</form>


<h1>Blade/Index</h1>
@isset ($msg)
<p>こんちには、{{$msg}}さん。</p>
@else
<p>何か書いて下さい。</p>
@endisset
<form method="POST" action="/hello">
    {{ csrf_field}}
    <input type="text" name="msg">
    <input type="submit">
</form>

<h1>Blade/Index</h1>
<p>&#064;foreachディレクティブの例</p>
<ol>
    foreach($data as $item)
    <li>{{$item}}
    @endforeach
    
</ol>
-->



</body>
</html>















<!--<html>
    <body>
        <h1>Blade/Index</h1>
        @if ($msg == '')
            <p>入力してください</p>
        @else
            <p>{{$msg}}</p>
        @endif
        <form method="POST" action="/hello">
            {{ csrf_field() }}
            <input type="text" name="msg">
            <input type="submit">
        </form>
    </body>
</html>-->