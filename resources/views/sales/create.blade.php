<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Venda</title>
</head>
<body>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('sales.store') }}" method="POST">
        @csrf
        <div>
            <label for="seller">Código Vendedor:</label>
            <input type="number" name="seller" id="seller">
        </div>
        <div>
            <label for="value">Valor:</label>
            <input type="number" step="0.01" name="value" id="value">
        </div>
        <div>
            <button type="submit">Adicionar</button>
        </div>
    </form>
</body>
</html>