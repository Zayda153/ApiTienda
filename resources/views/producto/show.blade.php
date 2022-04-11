@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Proveedor Id:</strong>
                            {{ $producto->proveedor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $producto->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Existencias:</strong>
                            {{ $producto->existencias }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Unitario:</strong>
                            {{ $producto->costo_unitario }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Unitario:</strong>
                            {{ $producto->precio_unitario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
