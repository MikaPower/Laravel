<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Abatjours Apresentacao</h1>
<?php  dd($abatjours); ?>
<ul><?php foreach ($abatjours as $abatjour) : ?>


        <li> {{ $abatjour->name }} </li>
    <?php endforeach; ?>
</ul>


<!--    @foreach ($abatjours as $abatjour)
<li>     {{ $abatjours->name }}      </li>
    @endforeach-->
</body>
</html>
