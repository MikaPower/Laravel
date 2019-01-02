@extends ('layout')


@section ('content')
<h1>Edit Project</h1>

<form method="post" action="/orders/{{ $order->id }}">
    {{ method_field('PATCH') }}
    {{ csrf_field()}}
    <div class="field">
        <label class="label" for="Quantidade">Quantidade</label>

        <div class="control">
            <input type="text" class="input" name="Quantidade" placeholder="Quantidade"
                   value="{{ $order->quantity }}">

        </div>
    </div>
    <div class="field">
        <label class="" for="Descrição">Descrição</label>

        <div class="control">
            <input type="text" class="textarea" name="description" placeholder="description"
                   value="{{ $order->description }}">

        </div>
    </div>





    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Update</button>

        </div>
    </div>
</form>


<form METHOD="post" action="/orders/{{ $order->id}}" style="margin-bottom:50px;">

    @method('DELETE')
    @csrf


    <div class="field">
        <div class="control">
            <button type="submit" class="button">Delete</button>
        </div>
    </div>
</form>


@endsection


