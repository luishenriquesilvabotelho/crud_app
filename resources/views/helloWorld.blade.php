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
                <a href="{{ route('/home') }}"><li>HOME</li></a>
                <a href="{{ route('/listar-pedidos') }}"><li>PEDIDOSt</li></a>
                <a href="{{ route('/listar-produtos') }}"><li>PRODUTOS</li></a>
            </ul>
        </nav>
    </div>
</body>
</html>