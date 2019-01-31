@extends('layout')

@section('content')

<style>
    td {
        text-align: center;
    }
    th{
        text-align: center;
    }


</style>

<div class="container">
    <div class="row ">
        <div class="col">
            <H1 class="text-center">Pedidos</H1>
            <table class="table-responsive table-bordered">
                <thead class="table-dark">
                <tr>
                    <th width="30%" classe="col">Nome</th width="30%">
                    <th class="col">Email</th>
                    <th class="col">Role</th>
                    <th class="col"></th>
                    <th class="col"></th>
                </tr>
                </thead>
                <tbody>


                <?php
                foreach ($users as $user) {
                    echo "<tr>";
                  // echo "<th scope=\"row\"> <a href=\"/users/$user->id\"> $user->id </a> </th>";
                    echo "<td><a href=\"/ users / $user->id\"> $user->name </a> </td>";
                    echo "<td> $user->email</td>";
                    ?><td> {{trim($user->getRoleNames(),'["]')}}</td>                   <!--  coisas do outro mundo-->
                <?php
                    echo '<td> <a class="btn btn-primary" href="/users/'.$user->id.'" role="button">Editar</a> </td>';
                    echo "<td>  <form method=\"post\"    action=\"users/{$user->id}\"> "; ?>
                    @method('DELETE')
                    @csrf
                    <?php
                    echo "<button type=\"submit\" class=\"btn btn-primary\" >Delete</button> </form>  </td>";
                    echo "</tr>";
                }
?>

</tbody>
</table>

<a class="btn btn-primary" href="/users/create" role="button">Criar Pedido</a>
<div class="row align-items-center">
    <br>
    <div class="col align-items-center">
        </br>
        {{$users->links()}}
    </div>
</div>

</div>

</div>
</div>
@endsection
