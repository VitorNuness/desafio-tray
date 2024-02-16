<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendedores</title>
</head>
<body>
    <a href="{{ route('sellers.create') }}">Adicionar Vendedor</a>
    <div>
        @forelse ($sellers as $seller)
            <div>
                {{ $seller->name }} {{ $seller->main }}
                <a href="{{ route('sellers.show', $seller->id) }}">Ver</a>
                <a href="{{ route('sellers.edit', $seller->id) }}">Editar</a>
                <form action="{{ route('sellers.destroy', $seller->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </div>
        @empty
            Nenhum vendedor cadastrado
        @endforelse
    </div>
</body>
</html>