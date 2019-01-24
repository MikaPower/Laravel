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
                        <div class="form-group">
                            <label for="exampleInputEmail1">Referencia</label>
                            <input type="text" readonly class="form-control-plaintext" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   name="referencia" placeholder="Referencia" value="{{$abatjour->reference}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="name"
                                   placeholder="Name" value="{{$abatjour->name}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <input type="text" class="form-control is-valid" id="exampleInputPassword1" name="price"
                                   placeholder="Price" value="{{$abatjour->price}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection
