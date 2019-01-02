@include('layout')



<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Numero pedido#</th>
        <th  scope="col">Quantidade</th>
        <th  class="col-md-8" scope="col">Descrição</th>
    </tr>
    </thead>
    <tbody>

        <?php
        foreach ($orders as $order){
            echo "<tr>";
            echo "<th scope=\"row\"> <a href=\"/orders/$order->id\" > $order->id </a> </th>";
            echo "<td>$order->quantity</td>";
            echo "<td> $order->description";
            echo "</tr>";
         }
        ?>
    </tbody>
</table>

