@extends('layout')

@section('content')
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col">
            <H1 class="text-center" ">Pedidos</H1>
            <table class="table-responsive">

                <thead class="table-dark">
                <tr>
                    <th scope="col">ID#</th>
                    <th scope="col">Pedido Numero</th>
                    <th class="col-md-8" scope="col">Titulo</th>
                    <th class="col" scope="col"></th>
                    <th class="col" scope="col"></th>
                </tr>
                </thead>
                <tbody>


                <?php
                foreach ($orders as $order) {
                    echo "<tr>";
                    echo "<th scope=\"row\"> <a href=\"/orders/$order->id\" > $order->id </a> </th>";
                    echo "<td>$order->order</td>";
                    echo "<td> $order->title";

                    echo '<td> <a class="btn btn-primary" href="/orders/'.$order->id.'" role="button">Editar</a> </td>';
                    echo "<td>  <form method=\"post\"    action=\"{$order->id}\"> "; ?>
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
