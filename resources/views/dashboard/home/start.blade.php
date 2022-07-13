<!-- TEMPLATE MASTER -->
@extends('dashboard.app')

@section('content')



<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
    <!-- h3 class="mb-4">Bienvenido a Sistema de Pago</h3 -->
    <div class="jumbotron" id="div_container">


        <h1 class="display-4 title text-center">Sistema de Pago</h1>

        <p style="text-align:center">
            <img src="{{asset('dashboard/img/logo/logo.png')}}">
        </p>
        <br><br>

        <strong>
            <h3 class="lead descripcion text-center">Bienvenido, desde aquí podras pagar tus facturas de manera rapida.</h3>
        </strong>


        <hr class="my-4">

        <p style="text-align:center">
            <a class="btn btn-primary btn-lg" href="#" role="button">Ver mis Facturas</a>
        </p>

    </div>
</diV>
@endsection