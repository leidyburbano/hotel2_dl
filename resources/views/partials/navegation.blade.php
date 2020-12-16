<nav class="navbar navbar-dark bg-dark">
         <!-- Navbar content -->
        </nav>
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{url('/')}}">Hotel La Rivera</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hotel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
                    <a class="dropdown-item" href="{{url('/hotel/mision-vision')}}">Mision y vision</a>
                    <a class="dropdown-item" href="{{url('/hotel/ubicación')}}">Ubicacion</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Servicios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item"  href="{{url('/servicios/habitaciones')}}">habitaciones</a>
                    <a class="dropdown-item"  href="{{url('/servicios/eventos/{id}')}}">Eventos</a>
                   
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/reservas ')}}">Reservas <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/reservas ')}}">Contactos <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        </nav>
     
     </div>
        
     <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        </nav>
