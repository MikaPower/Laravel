@extends('layout')

@foreach ($order->parcels as $parcel)
{{$parcel->getStateNamesNotUsed()}}





@endforeach


@section('content')



<div class="container h-100">
    <div class="row align-items-center">
        <div class="col">
            <h5>Pedido Numero:
                <small class="text-muted">{{ $order->order }}</small>
            </h5>
        </div>
        <div class="col">
            <h5>Titulo:
                <small class="text-muted">{{ $order->title }}</small>
            </h5>
        </div>
        <div class="col">
                <a class="btn btn-primary" href="/orders/{{$order->id}}/edit" role="Editar pedido">Editar</a>
        </div>
    </div>


    <!--@if ($order->parcels->count())
        <div>
            @foreach ($order->parcels as $parcel)
            <li>{{$parcel->quantity }}      {{$parcel->description}}
            </li>
            @endforeach
        </div>
        @endif
    -->


    <?php
    $i = 0;

    ?>


    @if ($order->parcels->count())

    @foreach ($order->parcels as $parcel)
   <!-- <form class="needs-validation" method="post" action="/parcels/{{$parcel->id}}" novalidate>-->
        <div class="form-row justify-content-center ">
            <div class="col-md-4 mb-3">
                <!-- NAO CRIAR LABELS SEMPRE QUE EXISTE UM-->
                <?php
                if ($i == 0) {
                    echo "   <label for=\"validationCustom01\"> Quantidade</label>";
                }
                ?>

                <input type="text" class="form-control" id="quantity{{$parcel->id}}" placeholder="First name"
                       name="quantity[]"
                       value="{{$parcel->quantity}}" required disabled>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <!-- NAO CRIAR LABELS SEMPRE QUE EXISTE UM-->
                <?php
                if ($i == 0) {
                    echo "<label for=\"validationCustom02\">Pedido</label>";
                }
                ?>


                <input type="text" class="form-control" id="description{{$parcel->id}}" placeholder="Last name"
                       value="{{$parcel->description}}" name="description[]"
                       required disabled>
            </div>

            <div class="col-md-4 mb-3">
                <!-- NAO CRIAR LABELS SEMPRE QUE EXISTE UM-->
                <?php
                if ($i == 0) {
                    echo "<label for=\"validationCustom02\">Estado</label>";
                    $i++;
                }
                ?>

                <form method="post" action="/parcels/{{$parcel->id}}">
                    @method('PATCH')
                    @csrf
                    <select class="form-control" name="state_id"  onchange="this.form.submit()">
                        <option value="4">{{$parcel->getStateNamesNotUsed()}}</option>
                        <option value="5">Pedido Apagado</option>
                        <option value="2">Pedido Recebido</option>
                        <option value="3">Pedido em Progresso</option>
                        <option value="1">Pedido Enviado</option>
                    </select>
                </form>
            </div>














     <!--       <div class="col align-self-center" id="teste">
                <div class="form-check ">
                    <input class="form-check-input" type="checkbox" value="0" name="edit{{$parcel->id}}"
                           id="{{$parcel->id}}" onclick="editbutton(id)">
                    <label class="form-check-label" for="defaultCheck1">
                        Editar
                    </label>
                </div>


            </div>-->
        </div>

<!--    </form>-->


    @endforeach
    @endif
    <div class="row justify-content-center">
        <h1>Adicionar mais produtos</h1>
    </div>
    <form method="post" action="/orders/{{$order->id}}/parcels">
        <div class="form-row justify-content-center" id="contem">
            <div class="col-md-4 mb-3">
                {{csrf_field()}}
                <div class="form-group" id="dynamic_field">
                    <label for="exampleInputEmail1">Quantidade</label>
                    <input type="text" class="form-control is-valid" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           name="quantity[]" placeholder="Numero" value="{{old('quantity')}}" required>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-group" id="testev1">
                    <label for="exampleInputPassword1">Produto</label>
                    <input type="text" class="form-control is-valid" id="exampleInputPassword1" name="description[]"
                           placeholder="Texto" value="{{ old('description')}}" required>
                </div>
            </div>
            <div class="col align-self-center">
                <button type="button" onclick="education_fields()" name="add" id="add" class="btn btn-success">Add
                    More
                </button>
            </div>
        </div>


        <div class="row" id="antes">
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>


<script>
    var room = 1;
    function education_fields() {


        Element.prototype.appendAfter = function (element) {
            element.parentNode.insertBefore(this, element.nextSibling);
        }, false;

        var objTo = document.getElementById('contem');
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group" + room);
        divtest.setAttribute("id", "form" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML = '<div class="form-row"> <div class="col-md-4 mb-3"> <div class="form-group" id="dynamic_field">  <input type="text" class="form-control is-valid" id="exampleInputEmail1" aria-describedby="emailHelp"name="quantity[]" placeholder="Numero" value="{{old('
        quantity
        ')}}" required> </div> </div> ' +
        '<div class="col-md-4 mb-3"> ' +
        '<div class="form-group" id="testev1">  ' +
        '<input type="text" class="form-control is-valid" id="example1" name="description[]"placeholder="Texto" value="{{ old('
        description
        ')}}" required>'
        '</div>' +
        '</div>' +
        '<div class="col ">' +
        '<button type="button"  id=' + room + ' onclick="remove(id)" class="btn btn-success">Add More' +
        '</button>';
        //  objTo.appendChild(divtest);
        if (room === 1) {
        divtest.appendAfter(document.getElementById('contem'));
        room = room + 1;
    }
    else{
            divtest.appendAfter(document.getElementById(("form"+(room-1))));
            room=room+1;
        }




    }

</script>
<script>
    function remove($rid) {
        document.getElementById("form"+$rid).outerHTML="";
    }
</script>


















<script>
    function editbutton($id) { //passo id
        // if (document.getElementById("$editparcel").value === "0") {
        //  (document.getElementById("button.$id")).setAttribute("value", 1);
        //(((document.getElementsByName(("edit")+$id)).disabled = true; //butao fica disable
        add($id);

if((document.getElementById($id)).value==0) {
    (document.getElementById($id)).setAttribute("value","1");
    (document.getElementById("quantity" + $id)).disabled = false;
    (document.getElementById("description" + $id)).disabled = false;
    }
    else{
        //se ja tiver on
        (document.getElementById($id)).setAttribute("value","0");
        (document.getElementById("quantity" + $id)).disabled = true;
        (document.getElementById("description" + $id)).disabled = true;
        (document.getElementById("button" + $id)).disable = true;
    }
}

    function add($id) {
        var button = document.createElement("input");
        button.type = "button";
        button.id="button"+$id;
        button.value = "im a button";
        var foo = document.getElementById("teste");
        foo.appendChild(button);
        }

    </script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    $(document).ready(function () {
        var postURL = "<?php echo url('orders'); ?>";
        var i = 1;
        $('#add').click(function () {
            i++;
            $('#contem').append(
                '<div class="form-row justify-content-center">' +
                ' <div class="col-md-4 mb-3"> ' +


                ' <div class="form-group" id="dynamic_field">' +
                ' <label for="exampleInputEmail1">Quantidade</label>' +
                ' <input type="text" class="form-control is-valid" id="exampleInputEmail1" aria-describedby="emailHelp" name="quantity[]" placeholder="Numero" value="" required>' +
                '</div>' +
                '</div>' +

                '<div class="col-md-4 mb-3">' +
                '<div class="form-group" id="testev1">' +
                '<label for="exampleInputPassword1">Produto</label>' +
                '<input type="text" class="form-control is-valid" id="exampleInputPassword1" name="description[]" placeholder="Texto" value="{{ old('description')}}" required>' +
            '</div>' +
            '</div>' +
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

<script>
    function editbutton($id) {
        // if (document.getElementById("$editparcel").value === "0") {
        //  (document.getElementById("button.$id")).setAttribute("value", 1);
        //(((document.getElementsByName(("edit")+$id)).disabled = true; //butao fica disable
        add($id);

        if((document.getElementById($id)).value==0) {
            (document.getElementById($id)).setAttribute("value","1");
            (document.getElementById("quantity" + $id)).disabled = false;
            (document.getElementById("description" + $id)).disabled = false;
        }
        else{
            (document.getElementById($id)).setAttribute("value","0");
            (document.getElementById("quantity" + $id)).disabled = true;
            (document.getElementById("description" + $id)).disabled = true;
            (document.getElementById("button" + $id)).dele = true;
        }
    }

    function add($id) {
        var button = document.createElement("input");
        button.type = "button";
        button.id="button"+$id;
        button.value = "im a button";
        var foo = document.getElementById("teste");
        foo.appendChild(button);
    }

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

