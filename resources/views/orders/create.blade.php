@extends('layout')


<h1>Hello, world!</h1>
<div class="container">
    <div class="row">
        <div class="col-3">

            <form method="post" action="/orders">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantidade</label>
                    <input type="text" class="form-control is-valid" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           name="quantidade" placeholder="Numero">
                    </small>
                </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Produto</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Texto">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</div>

</form>
<!--
<script>

    function add() {
//Create an input type dynamically.
        var element = document.createElement("input");
//Assign different attributes to the element.
        element.type = text;
        element.value = type; // Really? You want the default value to be the type string?
        element.name = teste; // And the name too?
        element.onclick = function add() { // Note this is a function
            alert("blabla");
        };

        var foo = document.getElementById("fooBar");
//Append the element in page (in span).
        foo.appendChild(element);
    }

    document.getElementById("btnAdd").onclick = function () {
        add("text");
    };
-->
