@extends('layout')

@section('content')
<div class="row justify-content-center">
<h1>Pedidos</h1>
</div>

<div class="container" id="contem">
    <div class="row justify-content-center "id="teste">
        <div class="col">
            <form method="post" action="/orders" id="add_name">
                {{csrf_field()}}
                <div class="form-group" id="dynamic_field">
                    <label for="exampleInputEmail1">Numero Pedido</label>
                    <input type="text" class="form-control is-valid" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           name="order" placeholder="Pedido id" value="{{old('order')}}" required >
                </div>
        </div>

        <div class="col-6">
            <div class="form-group" id="testev1">
                <label for="exampleInputPassword1">Titulo</label>
                <input type="text" class="form-control is-valid" id="exampleInputPassword1" name="title" placeholder="Texto"  value="{{ old('title')}}" required>
            </div>
        </div>


        <div class="col-3">
            <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
        </div>



    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</div>

</form>





<script type="text/javascript">
    $(document).ready(function(){
        var postURL = "<?php echo url('addmore'); ?>";
        var i=1;


        $('#add').click(function(){
            i++;
            $('#contem').append(


                '<div class="row" id="row'+i+'" class="dynamic-added">' +
                '<div class="col">'+
                '<input type="text" class="form-control is-valid" id="exampleInputEmail aria-describedby="emailHelp" name="name[]" placeholder="Numero" value="{{old('quantity')}}" required > ' +
                '</div>'+
            '<div class="col">'+
            '<input type="text" class="form-control is-valid" id="coluna'+i+'" name="description[]" placeholder="Texto"  value="{{ old('description')}}" required>  ' +
            '</div>'+
            '<div class="col">'+
            '<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>' +
            '</div>'+
            '</div>'

        )



        });


        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#submit').click(function(){
            $.ajax({
                url:postURL,
                method:"POST",
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }
            });
        });


        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $(".print-success-msg").css('display','none');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
</script>

@endsection
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
