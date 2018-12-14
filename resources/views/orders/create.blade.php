@extends('layouts.app')

@section
<h1>Hello, world!</h1>

<form method="post" action="/orders">
    {{csrf_field()}}php
        <div class="form-group">
            <label for="exampleInputEmail1">Referencia</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
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


        <div>
            <button type="submit">Create Project
            </button>
        </div>

    </form>
@endsection



