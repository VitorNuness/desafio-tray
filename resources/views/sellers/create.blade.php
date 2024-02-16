<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Vendedor</title>
</head>
<body>
    <form action="{{ route('sellers.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="mail">E-mail:</label>
            <input type="email" name="mail" id="mail">
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <a href="{{ route('sellers.index') }}">Voltar</a>
</body>
</html>