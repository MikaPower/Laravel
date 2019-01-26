@extends('layout')
@section('content')


<div class="container">
    <div class="row">
        <div class="col 6">
            @if($abatjour->imagemodels->count())
            <strong>Original Image:</strong>
            <br/>
            <img src="/storage/images/{{$abatjour->imagemodels->filename}}"
                 style="max-width: 100%;max-height:100%; height: auto;" alt="{{ $abatjour->imagemodels->filename  }}"/>
        </div>
        @endif
        <div class="col-6">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <h1 class="display-3">Referencia</h1>
                        <h1 class="display-4">{{$abatjour->referencia}}</h1>
                    </div>sss
                </div>
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-3">Nome</h1>
                        <h1 class="display-4">{{$abatjour->name}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h1 class="display-3">Preço</h1>
                        <h1 class="display-4">{{$abatjour->price}}</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection
