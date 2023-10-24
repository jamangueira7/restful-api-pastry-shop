{{$name}} seu pedido foi feito com sucesso.<br><br>

Valor total do pedido: R$ {{$total}}.<br><br>
Data da compra: {{$data}}<br><br>

Segue abaixo confirmação dos produtos:<br>

<table>
    <thead>
    <tr>
        <th>Produto</th>
        <th>Preço unitario</th>
        <th>Quantidade</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $k => $v)
        <tr>
            <td>{{ $v['name'] }}</td>
            <td>R$ {{ $v['price'] }}</td>
            <td>{{ $v['pivot']['amount'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

