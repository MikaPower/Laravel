@extends('layout')
@section('content')
<h1>Hello, world!</h1>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<form method="post" action="/abatjours" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
        <label for="exampleInputEmail1">Referencia</label>
        <input type="text" class="form-control is-valid" id="exampleInputEmail1" aria-describedby="emailHelp"
               name="referencia" placeholder="Referencia">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Name">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="price" placeholder="Price">
    </div>


        <div class="row">
            <div class="col-md-4">
            <h5>Adicionar Imagem</h5>
            </div>
                <div class="col-md-4">
            <div class="form-group">
                <input type="file" name="filename" class="form-control">
            </div>
                </div>
                    <div class="col-md-4 align-self-start">
                        <div class="float-right">
            <button type="submit" class="btn btn-success">Upload Image</button>
                    </div>
        </div>
        </div>


        @if($image)
        <div class="row">
            <div class="col-md-12">
                <strong>Original Image:</strong>
                <br/>
                <img src="/storage/images/{{$image->filename}}" style="max-width: 100%;max-height:100%; height: auto;" alt="{{ $image->filename }}" />

            </div>
        </div>
            <div class="row">
            <div class="col-md-4">
                <strong>Thumbnail Image:</strong>
                <br/>
                <img src="/storage/thumbnail/{{$image->filename}}"  />
            </div>
        </div>
        @endif
    </form>
</div>
@endsection
