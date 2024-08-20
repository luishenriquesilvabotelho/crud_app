<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>{{$pessoa1}}</li>
        <li>{{$pessoa2}}</li>
        <li>{{$pessoa3}}</li>
        <li>{{$pessoa4}}</li>
    </ul>
    @for($i=0; $i < count($arr); $i++)
        <p>{{$arr[$i]}}</p>
    @endfor
</body>
</html>