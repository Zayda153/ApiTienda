@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tienda de Abarrotes "Joshua"') }}</div>

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menú
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               
                                <li><a class="dropdown-item" href="{{ route('productos.index') }}"><i class="fa fa-box-open">Productos</i></i></a></li>
                      
                                <li><a class="dropdown-item" href="{{ route('proveedores.index') }}"><i class="fa fa-box-open">Proveedores</i></a></li>
                             
                                <li><a class="dropdown-item" href="{{ route('ventas.index') }}"><i class="fa fa-box-open">Ventas</i></a></li>
                                
                                <li><a class="dropdown-item" href="{{ route('entradas.index') }}"><i class="fa fa-box-open">Entradas</i></a></li>

                                <li><a class="dropdown-item" href="{{ route('salidas.index') }}"><i class="fa fa-box-open">Salidas</i></a></li>

                                <li><a class="dropdown-item" href="{{ route('users.index') }}"><i class="fa fa-box-open">Usuarios</i></a></li>
                              

                            </ul>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</div>
@endsection
