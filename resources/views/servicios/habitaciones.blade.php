@extends('Layout.master')
@section('content')


     <h2> Habitaciones tipo:</h2>
     <h4> Individual - Doble - Triple - Suite - Queen </h4>
     <div class = "container">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($habitacion as $h)
            <div class="col">
                <div class="card">
                    <img src='{{url("/img/$h->foto")}}' class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tipos de Habitacion</h5>
                            <p class="card-text" aling="justify">{{ $h->Numero }}: {{$h->Tipo}}</p>
                            <p class="card-text" aling="justify">{{ $h->descripcion }}</p>
                            <p class="card-text" aling="justify"> Numero De Camas: {{ $h->numCamas }}</p>
                            <p class="card-text" aling="justify"> Precio: {{ $h->precio }}</p>
                            
                            <a href="#" class="btn btn-primary">Alquilar Habitacion</a> <br><br>
                            <a href="#" class="btn btn-danger">Devolver Habitacion </a>
                        </div>
                      
                </div>
                <br> <br> 
            </div>
            <br> <br> 
        @endforeach
        <br>   <br>   <br> 
        Alojamiento vacacional
        Hotel La Rivera 
                <a href="{{url('/')}}" class="btn btn-secondary">Regresar</a>
        </div>
        <br> <br>
     </div>
      
    </div>    
@stop