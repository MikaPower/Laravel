@include('layout')

<div class="container">
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID#</th>
        <th  scope="col">Pedido Numero</th>
        <th  class="col-md-8" scope="col">Titulo</th>
    </tr>
    </thead>
    <tbody>

        <?php
        foreach ($orders as $order){
            echo "<tr>";
            echo "<th scope=\"row\"> <a href=\"/orders/$order->id\" > $order->id </a> </th>";
            echo "<td>$order->order</td>";
            echo "<td> $order->title";
           echo  "<td> <a class=\"btn btn-primary\" href=\"{$order->id}\" role=\"button\">Editar</a> </td>";
            echo "</tr>";
         }
        ?>
    </tbody>
</table>
</div>
