{{$name}} seu pedido foi feito com sucesso.<br>

Valor total do pedido: R$ {{$name}}.<br>
Data: {{$data}}<br>

Segue abaixo confirmação dos produtos:<br>
@foreach ($products as $k => $v)
    Produto: {{ $v['name'] }} - Valor: R$ {{ $v['price'] }}<br />
@endforeach
