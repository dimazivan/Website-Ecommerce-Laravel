@extends('admin.layouts.app')
@section('title')
Halaman tidak dapat ditemukan
@endsection
@section('content')
<!-- page content -->
<div class="col-md-12">
    <div class="col-middle">
        <div class="text-center text-center">
            <h1 class="error-number">404</h1>
            <h2>Sorry but we couldn't find this page</h2>
            <p>This page you are looking for does not exist <a href="#">Report this?</a>
            </p>
            <div class="mid_center">
                <p>You will redirect to <a href="/admin">homepage </a>in <span id="counter">10</span> second(s)</p>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<script type="text/javascript">
    function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML) <= 0) {
            window.location = "/admin";
        }
        if (parseInt(i.innerHTML) != 0) {
            i.innerHTML = parseInt(i.innerHTML) - 1;
        }
    }
    setInterval(function() {
        countdown();
    }, 1000);
</script>
@endsection