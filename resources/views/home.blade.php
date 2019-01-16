@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div id="delayMsg"></div>
                    <input type="button" onclick="delayRedirect()" value="Click to Redirect"/>
                    <script>
                        setTimeout(function () {
                        window.location.href = "abatjours";
                    }, 2000);
                        </script>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection




<script>
    function delayRedirect(){
        document.getElementById('delayMsg').innerHTML = 'Please wait you\'ll be redirected after <span id="countDown">5</span> seconds....';
        var count = 5;
        setInterval(function(){
            count--;
            document.getElementById('countDown').innerHTML = count;
            if (count == 0) {
                window.location = 'http://127.0.0.1:8000/orders';
            }
        },1000);
    }
</script>




<?php
    function redirectafterlogin() {
        sleep(1);
       return redirect('orders');

    }
?>
