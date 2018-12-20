@include('layout')



<h1>Orders Apresentacao</h1>


<div class="list-group">



@foreach ($orders as $order)
   <a href="#" class="list-group-item list-group-item-action active">{{$order->description}}</a>
@endforeach
    </div>



