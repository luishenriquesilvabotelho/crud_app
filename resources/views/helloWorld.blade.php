<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello PHP and World!</h1>
    <div>
        <nav>
            <ul>
                <a href="{{ url('/home') }}"><li>HOME</li></a>
                <a href="{{ url('/listar-pedidos') }}"><li>PEDIDOS</li></a>
                <a href="{{ url('/listar-produtos') }}"><li>PRODUTOS</li></a>
            </ul>
        </nav>
    </div>
</body>
</html>