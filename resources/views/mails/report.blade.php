{{-- <p>Relatório de vendas referente ao dia {{ $report->date }}</p> --}}
<p>Dados do vendedor:</p>
<ul>
    <li>Código: {{$report->seller->id}}</li>
    <li>Nome: {{$report->seller->name}}</li>
    <li>E-mail: {{$report->seller->mail}}</li>
</ul>
<p>
    @if ($report->sales)
        <table>
            <thead>
                <td>ID</td>
                <td>Valor</td>
                <td>Comissão</td>
            </thead>

            <tbody>
                @foreach ($report->sales as $sale)
                    <td>$sale->id</td>
                    <td>$sale->value</td>
                    <td>$sale->comission</td>
                @endforeach
            </tbody>

            <tfoot>
                <td>Total</td>
                <td>$report->totalValue</td>
                <td>$report->totalComission</td>
            </tfoot>
        </table>
    @endif
</p>