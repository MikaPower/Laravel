@extends('layouts.app')

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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<div id="delayMsg"></div>
<input type="button" value="Click to Redirect"/>




<script>
    function delayRedirect(){
        document.getElementById('delayMsg').innerHTML = 'Please wait you\'ll be redirected after <span id="countDown">5</span> seconds....';
        var count = 5;
        setInterval(function(){
            count--;
            document.getElementById('countDown').innerHTML = count;
            if (count == 0) {
                window.location = 'https://www.google.com';
            }
        },1000);
    }
</script>
