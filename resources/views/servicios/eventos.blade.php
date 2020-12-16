@extends('Layout.master')
@section('content')

<h2> Eventos </h2>
 
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn0.matrimonio.com.co/emp/fotos/6/8/4/8/r10_2x_26685660-2087792211293593-2178119500757852140-o_10_116848.jpg" 
      class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>HOTEL LA RIVERA </h5>
        <p>Organizar tu matrimonio será más fácil y divertido</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://th.bing.com/th/id/OIP.AK9zGwBxBCZEXvWMBcBYRwHaE8?pid=Api&w=4752&h=3168&rs=1"
       class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>HOTEL LA RIVERA</h5>
        <p>Organizar tus 15 seaños  será más fácil </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://th.bing.com/th/id/OIP.8x_SgLjOWzFYQY8XkULNZwHaFj?pid=Api&rs=1" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>HOTEL LA RIVERA</h5>
        <p>Decoraciones para todo tipo de fiestas  </p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@stop