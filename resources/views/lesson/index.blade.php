<html>
<head>
    <title>Hello/Index</title>
    <style>
        body{
            font-size: 16pt;
            color: #999;
        }
        h1{
            font-size: 100pt;
            text-align: right;
            color: #f6f6f6;
            margin: -50px 0px -100px 0px;
        }
    </style>
</head>
<body>
<h1>Blade/Index</h1>

@isset ($msg)
<p>こんちには、{{$msg}}さん。</p>
@else
<p>名前を入力して下さい。</p>
@endisset

@isset ($id)
<p>ID：{{$id}}</p>
@else
<p>IDを入力して下さい。</p>
@endisset



<form method="POST" action="/lesson">
    {{ csrf_field() }}
    <label for="namae">お名前:</label>
    <input type="text" name="msg"><br>
    <label for="id">id:</label>
    <input type="text" name="id"><br>
    <input type="submit">
</form>
</body>
</html>