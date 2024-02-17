<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendas</title>
</head>
<body>
    <div>
        @forelse ($sales as $sale)
            <div>
                {{ $sale->seller->id }}
                {{ $sale->seller->name }}
                {{ $sale->seller->mail }}
                {{ $sale->value * 0.085 }}
                {{ $sale->value }}
                {{ $sale->created_at }}
            </div>
        @empty
            Nenhuma venda registrada
        @endforelse
    </div>
</body>
</html>