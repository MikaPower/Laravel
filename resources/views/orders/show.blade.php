@extends('layout')


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

    <p>
        <a class="btn btn-primary" href="/orders/{{$order->id}}/edit" role="Editar pedido">Editar</a>
    </p>
    <?php
    $i = 0;

    ?>


    @if ($order->parcels->count())
    <form class="needs-validation" novalidate>

        @foreach ($order->parcels as $parcel)

            <div class="form-row justify-content-center">
                <div class="col-md-4 mb-3">
                    <!-- NAO CRIAR LABELS SEMPRE QUE EXISTE UM-->
                    <?php
                    if ($i == 0) {
                        echo "   <label for=\"validationCustom01\"> Quantidade</label>";
                    }
                    ?>

                    <input type="text" class="form-control" id="{{$parcel->id}}" placeholder="First name"
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
                        $i++;
                    }
                    ?>


                    <input type="text" class="form-control" id="{{$parcel->id}}" placeholder="Last name"
                           value="{{$parcel->description}}" name="description[]"
                           required disabled>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="edit{{$parcel->id}}" id="{{$parcel->id}}" onclick="editbutton(id)">
                        <label class="form-check-label" for="defaultCheck1">
                            Editar
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="0" name="desedit{{$parcel->id}}" id="{{$parcel->id}}" disabled onclick="deseditbutton(id)">
                        <label class="form-check-label" for="defaultCheck2">
                            Desetidar
                        </label>
                    </div>


                </div>
            </div>

    </form>

    @endforeach
    @endif



<div class="row align-items-center-center " id="teste">
    <div class="col">
        <form method="post" action="/orders/{{$order->id}}/parcels" id="add_name">
            {{csrf_field()}}
            <div class="form-group" id="dynamic_field">
                <label for="exampleInputEmail1">Quantidade</label>
                <input type="text" class="form-control is-valid" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       name="quantity[]" placeholder="Numero" value="{{old('quantity')}}" required>
            </div>
    </div>

    <div class="col-6">
        <div class="form-group" id="testev1">
            <label for="exampleInputPassword1">Produto</label>
            <input type="text" class="form-control is-valid" id="exampleInputPassword1" name="description[]"
                   placeholder="Texto" value="{{ old('description')}}" required>
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
</form>
@endsection

</div>




<script>
    function editbutton($id) {
        // if (document.getElementById("$editparcel").value === "0") {

        //  (document.getElementById("button.$id")).setAttribute("value", 1);
        //(((document.getElementsByName(("edit")+$id)).disabled = true; //butao fica disable
        (document.getElementById($id).disabled = true;
        //(document.getElementsByName("desedit")+$id).disabled = false;
        // (document.getElementById("freeImiDate")).disabled = false;
        /* } else {
         (document.getElementById("button.$id")).setAttribute("value",0);
         (document.getElementById("$id")).disabled = true;
         }
         }*/
    }




        function deseditbutton($id) {

            // if (document.getElementById("$editparcel").value === "0") {
            //  (document.getElementById("button.$id")).setAttribute("value", 1);
            (document.getElementById($id)).disabled = false;
            //(document.getElementById("imiPayValue")).setAttribute("value", null);
            (document.getElementById("desedit$id")).disabled = true;
            (document.getElementById("edit$id")).disable = false;
            /* } else {
             (document.getElementById("button.$id")).setAttribute("value",0);
             (document.getElementById("$id")).disabled = true;
             }
             }*/

        }
    </script>
