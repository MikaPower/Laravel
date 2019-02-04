@extends('layout')
@section('content')
<style>
    .form-control::-webkit-input-placeholder
    {
        color: rgb(33,37,41);
    }
    .form-control:focus {
        border-color: #FF0000;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
    }
    .form-control{
        border-color: #00f532;
    }



    </style>

<div class="container">
    <div class="row">
        <div class="col 6">
            @if($abatjour->imagemodels->count())
            <strong>Original Image:</strong>
            <br/>
            <img src="/storage/images/{{$abatjour->imagemodels->filename}}" class="img-fluid"
                 style="max-width: 100%;max-height:100%; height: auto;" alt="{{ $abatjour->imagemodels->filename  }}"/>
        </div>
        @endif
        <div class="col-6">
            <div class="container">
                <form method="post" action="/abatjours/{{ $abatjour->id }}">
                    @method('PATCH')
                    @csrf
                <div class="row">
                    <div class="col-5">
                        <h1 class="display-3">Referencia</h1>
                        <input type="text" class="form-control"  placeholder="Referencia" name="referencia" value="{{$abatjour->referencia}}" style="font-size: xx-large ; border-color: #00f532">

                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-3">Nome</h1>
                        <input type="text" class="form-control" placeholder="Nome" name="name" value="{{$abatjour->name}}" style="font-size: xx-large ;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h1 class="display-3">Preço</h1>
                        <input type="text" class="form-control" placeholder="Preço" name="price" value="{{$abatjour->price}}" style="font-size: xx-large ;">

                    </div>
                </div>
                    <div class="row">
                        <div class="col">
                        <button type="submit"  style="margin-top: 10px  ;" class="btn btn-primary btn-lg">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
