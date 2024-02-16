{{ $seller->name }} {{ $seller->main }}
                <a href="{{ route('sellers.edit', $seller->id) }}">Editar</a>
                <form action="{{ route('sellers.destroy', $seller->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
                
    <a href="{{ route('sellers.index') }}">Voltar</a>