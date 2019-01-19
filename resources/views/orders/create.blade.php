@extends('layout')

@section('content')
<div class="row justify-content-center">
<h1>Pedidos</h1>
</div>

<br class="container" id="contem">
    <div class="row justify-content-center "id="teste">
        <div class="col">
            <form method="post" action="/orders" id="add_name">
                {{csrf_field()}}
                <div class="form-group" id="dynamic_field">
                    <label for="order">Numero Pedido</label>
                    <input type="text" class="form-control is-valid" id="order"
                           aria-describedby="emailHelp" name="order" placeholder="Pedido id" value="{{old('order')}}"  >
                </div>
        </div>

        <div class="col-6">
            <div class="form-group" id="testev1">
                <label for="title">Titulo</label>
                <input type="text" class="form-control is-valid" id="title" name="title" placeholder="Texto"  value="{{ old('title')}}" >
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
    <br>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    </form>
</div>




@endsection
