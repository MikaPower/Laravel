@include('layout')



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
            echo "</tr>";
         }
        ?>
    </tbody>
</table>

