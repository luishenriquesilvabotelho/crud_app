<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
</head>
<body>
    <h1>Meu Perfil</h1>
    <nav>
        <ul>
            <li><a href="{{url ('cadastrar')}}">Cadastrar</a></li>
            <li><a href="{{url ('meuPerfil')}}">Meu Perfil</a></li>
            <li><a href="{{url ('')}}">Sair</a></li>
            <p>{{$nome}}</p>
        </ul>
    </nav>
</body>
</html>