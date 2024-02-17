<p>Relatório de vendas referente ao dia {{ $report->date }}</p>
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
                <tr>
                    <td>Valor</td>
                    <td>Comissão</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($report->sales as $sale)
                    <tr>
                        <td>{{ $sale->value }}</td>
                        <td>{{ $sale->comission}}</td>
                    </tr>
                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <td>{{ $report->salesTotal }}</td>
                    <td>{{ $report->commissionTotal }}</td>
                </tr>
            </tfoot>
        </table>
    @endif
</p>