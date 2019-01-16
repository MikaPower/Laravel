@extends('layout')


<div class="container-fluid">
<nav class="navbar-primary">
    <a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left"></span></a>
    <ul class="navbar-primary-menu">
        <li>
            <a href="#"><span class="glyphicon glyphicon-list-alt"></span><span class="nav-label">Dashboard</span></a>
            <a href="#"><span class="glyphicon glyphicon-envelope"></span><span class="nav-label">Profile</span></a>
            <a href="#"><span class="glyphicon glyphicon-cog"></span><span class="nav-label">Settings</span></a>
            <a href="#"><span class="glyphicon glyphicon-film"></span><span class="nav-label">Notification</span></a>
            <a href="#"><span class="glyphicon glyphicon-calendar"></span><span class="nav-label">Monitor</span></a>
        </li>
    </ul>
</nav>
</div>
<div class="container col-3">
<h1>Abatjours Apresentacao</h1>

@foreach ($abatjours as $abatjour)
<li> {{$abatjour->name}}</li>
@endforeach
</div>
</body>
</html>


<script>
    $('.btn-expand-collapse').click(function(e) {
        $('.navbar-primary').toggleClass('collapsed');
    });
</script>
