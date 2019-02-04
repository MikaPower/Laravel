@extends('layout')

@section('content')

<style>

    td, th{
        text-align: center;
    }
</style>

<div class="container">
    <div class="row ">
        <div class="col">
            <H1 class="text-center" ">Pedidos</H1>
            <table class="table-responsive table-bordered w-100 ">

                <thead class="table-dark">
                <tr>
                    <th style="width: 5%;" class="col">ID#</th>
                    <th style="width: 5%;" class="col">Pedido Numero</th>
                    <th style="width: 100%;" class="col" >Titulo</th>
                    @role('admin')
                    <th class="col" >Cliente</th>
                    @endrole
                    <th class="col" ></th>
                    <th class="col" ></th>
                </tr>
                </thead>
                <tbody>


                <?php
                foreach ($orders as $order) {
                    echo "<tr>";
                    echo "<th scope=\"row\"> <a href=\"/orders/$order->id\" > $order->id </a> </th>";
                    echo "<td>$order->order</td>";
                    echo "<td> $order->title</td>";
               if(Auth()->user()->hasRole('admin')) {
                   ?>
                     <td> {{Auth::user()->name}}</td>
                   <?php
               }

                    echo '<td> <a class="btn btn-primary" href="/orders/'.$order->id.'" role="button">Editar</a> </td>';
                    echo "<td>  <form method=\"post\"    action=\"orders/{$order->id}\"> "; ?>
                    @method('DELETE')
                    @csrf
                    <?php
                    echo "<button type=\"submit\" class=\"btn btn-primary\" >Delete</button> </form>  </td>";
                    echo "</tr>";
                }
                ?>

                </tbody>
            </table>

            <a class="btn btn-primary" href="/orders/create" role="button">Criar Pedido</a>
            <div class="row align-items-center">
                <br>
                <div class="col align-items-center">
                    </br>
                    {{$orders->links()}}
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
