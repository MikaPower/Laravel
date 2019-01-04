@extends('layout')


@section('content')


<div class="container h-100">
    <div class="row align-items-center">
        <div class="col">
            <h5>Pedido Numero:
                <small class="text-muted">{{ $order->order }}</small>
            </h5>
        </div>
        <div class="col">
            <h5>Quantidade:
                <small class="text-muted">{{ $order->title }}</small>
            </h5>
        </div>
    </div>


@if ($order->parcels->count())
    <div>
        @foreach ($order->parcels as $parcel)
        <li>{{$parcel->quantity }}      {{$parcel->description}}
        </li>
        @endforeach
    </div>
    @endif


    <p>
        <a class="btn btn-primary" href="/orders/{{$order->id}}/edit" role="Editar pedido">Link</a>
    </p>

</div>
<div class="container">
    <div class="row justify-content-center "id="teste">
        <div class="col">
            <form method="post" action="/orders/{{$order->id}}/parcels" id="add_name">
                {{csrf_field()}}
                <div class="form-group" id="dynamic_field">
                    <label for="exampleInputEmail1">Quantidade</label>
                    <input type="text" class="form-control is-valid" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           name="quantity[]" placeholder="Numero" value="{{old('quantity')}}" required >
                </div>
        </div>

        <div class="col-6">
            <div class="form-group" id="testev1">
                <label for="exampleInputPassword1">Produto</label>
                <input type="text" class="form-control is-valid" id="exampleInputPassword1" name="description[]" placeholder="Texto"  value="{{ old('description')}}" required>
            </div>
        </div>


        <div class="col-3">
            <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
@endsection
