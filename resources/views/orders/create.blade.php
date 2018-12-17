@extends('layout')


<h1>Hello, world!</h1>
<div class="container">
    <div class="row">
        <div class="col-6">

            <form method="post" action="/orders">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Produto</label>
                    <input type="text" class="form-control is-valid" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="referencia" placeholder="Referencia">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                    </small>
                </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Name">
            </div>
        </div>

        <div class="col-3">

            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="text" class="form-control" id="exampleInputPassword2" name="price" placeholder="Price">
            </div>
        </div>
        </form>
    </div>














</div>
<div>
    <button type="submit">Create Project
    </button>


</div>








<script>

function add(type) {
//Create an input type dynamically.
var element = document.createElement("input");
//Assign different attributes to the element.
element.type = type;
element.value = type; // Really? You want the default value to be the type string?
element.name = type; // And the name too?
element.onclick = function() { // Note this is a function
alert("blabla");
};

var foo = document.getElementById("fooBar");
//Append the element in page (in span).
foo.appendChild(element);
}
document.getElementById("btnAdd").onclick = function() {
add("text");
};



</script>
<input type="button" id="btnAdd" value="Add Text Field">
<p id="fooBar">Fields:</p>







