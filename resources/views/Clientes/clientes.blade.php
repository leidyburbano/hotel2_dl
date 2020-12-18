
  @extends('Layout.master')
  @section('content')

  <div class="text-center">
  <br>
  <h2> Clientes Registrados</h2>
  <br>
    <div class = "container">
      <div class = "row">
        @foreach($Clientes as $c)
        <div class = "col-md-4">
          <div class="card" style="width: 15rem;">
            <img src='{{url("/img1/$c->foto")}}' class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Registro</h5>
                <p class="card-text" aling="justify"> Id: {{ $c->id}}</p>
                <p class="card-text" aling="justify"> Identificacion: {{ $c->DNI}}</p>
                <p class="card-text" aling="justify"> Nombre: {{ $c->nombres }}</p>
                <p class="card-text" aling="justify"> Genero: {{ $c->genero }}</p>
                <p class="card-text" aling="justify"> Domicilio: {{ $c->Domicilio }}</p>
                <p class="card-text" aling="justify"> Telefono: {{ $c->Telefono }}</p>
                                
                <a href="#" class="btn btn-primary">Actualizar</a> 
                <a href="#" class="btn btn-danger">Eliminar </a>  
          
            </div>
       
          </div>
          <br> <br>
        </div>
        @endforeach   
        <div class = "col-md-12" aling="center">
          <a href="{{url('/')}}" class="btn btn-secondary">Regresar</a>
        </div>
      </div>
      <br> <br>
    </div>
  </div>
  @stop