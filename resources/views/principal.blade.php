@extends('Layout.master')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <style>
          h1{
            font-family: 'Dancing Script', cursive;
            }
     </style>
  <h1>Bienvenidos al Hotel la Rivera</h1>

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://revista.pricetravel.com.mx/wp-content/uploads/jdadme/2016/05/jpg/7162045870_14de1838c0_k.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://a.travel-assets.com/findyours-php/viewfinder/images/res70/95000/95441-Zocalo-Mexicocity.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://media.metrolatam.com/2019/03/14/hxmxpanoramicas01-6b7171dc4d88b3df239cdd022d8f930d-1200x0.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@stop