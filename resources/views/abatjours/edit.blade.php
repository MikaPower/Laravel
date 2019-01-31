@extends('layout')
@section('content')



<style>

    .container{
        height: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .card{
flex-direction: row;
        height: 321px;
        width: 700px;
    }
    .card-body-left{
        padding: 0;
    }

</style>



<div class="container">
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


    <div class="card" style="flex-direction: row">
        <div class="card-body-left">
            <img src="/storage/images/{{$abatjour->imagemodels->filename}}" style="max-width: 100%;max-height: 100%" class="img-fluid" alt="">
        </div>

        <div class="card-body right">
            TESTING TEstring something
        </div>
    </div>
@endsection


