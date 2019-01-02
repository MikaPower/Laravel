@extends('layout')


@section('content')


<div class="container h-100">
    <div class="row align-items-center">
        <div class="col">
            <h5>Numero da Encomenda:
                <small class="text-muted">{{ $order->id }}</small>
            </h5>
        </div>
        <div class="col">
            <h5>Description:
                <small class="text-muted">{{ $order->description }}</small>
            </h5>
        </div>
        <div class="col">
            <h5>Quantidade:
                <small class="text-muted">{{ $order->quantity }}</small>
            </h5>
        </div>
    </div>

</div>

<p>
<a class="btn btn-primary" href="/orders/{{$order->id}}/edit" role="Editar pedido">Link</a>
</p>



@endsection
