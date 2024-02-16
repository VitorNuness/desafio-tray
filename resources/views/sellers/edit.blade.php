<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Vendedor: #{{ $seller->id }}</title>
</head>
<body>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('sellers.update', $seller->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="{{ $seller->name ?? old('name') }}">
        </div>
        <div>
            <label for="mail">E-mail:</label>
            <input type="email" name="mail" id="mail" value="{{ $seller->mail ?? old('mail') }}">
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <a href="{{ route('sellers.index') }}">Voltar</a>
</body>
</html>