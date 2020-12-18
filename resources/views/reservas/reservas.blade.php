  
  @extends('Layout.master')
  @section('content')
      <br>
      <div class="text-center">
      <h1> Lista de Habitaciones Alquiladas</h1>
      </div>
      <br>
          <div class="container">
            <div class="row">
                @foreach($consulta as $c)
                  <div class="col-md-4">
                  
                    <div class="card">

                      <div class="view overlay">
                        <img class="card-img-top" src='{{url("img/$c->foto")}}'>
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <div class="card-body default-color-dark white-text rounded-bottom">
                        <h4 class="card-title">{{$c->Numero}}: {{$c->Tipo}}</h4>
                        <p class="card-text white-text mb-4">Precio: {{$c->precio}}</p>

                        <a href="#" class="btn btn-primary">Actualizar</a> 
                        <a href="#" class="btn btn-danger">Eliminar </a>  

                        <hr class="hr-light">
                        <p class="card-text white-text mb-2"><strong>Reservada</strong></p>
                    </div>
                  </div>
                  <br><br>           
                </div>
                @endforeach
              </div>
  
              <a href="{{url('/')}}" class="btn btn-secondary">Regresar</a>  
              <br> 
              <br>
            </div>
          </div>
          <br>

  @stop