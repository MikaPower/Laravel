@extends ('layout')


@section ('content')
<h1>Edit Project</h1>

<form method="post" action="/abatjours/{{ $abatjour->id }}">
    {{ method_field('PATCH') }}
    {{ csrf_field()}}
    <div class="field">
        <label class="label" for="Referencia">Referencia</label>

        <div class="control">
            <input type="text" class="input" name="referencia" placeholder="referencia"
                   value="{{ $abatjour->referencia }}">

        </div>
    </div>


    <div class="field">
        <label class="label" for="nome">Nome</label>

        <div class="control">
            <textarea name="name" placeholder="Nome" class="textarea">{{ $abatjour->name }}</textarea>

        </div>
    </div>

    <div class="field">
        <label class="label" for="preco">Preço</label>

        <div class="control">
            <input type="text" class="input" name="price" placeholder="Preco" value="{{$abatjour->price}}">
        </div>
    </div>


    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Update</button>

        </div>
    </div>
</form>


<form METHOD="post" action="/abatjours/{{ $abatjour->id}}" style="margin-bottom:50px;">

@method('DELETE')
    @csrf


    <div class="field">
        <div class="control">
            <button type="submit" class="button">Delete</button>

        </div>
    </div>
</form>


@endsection


