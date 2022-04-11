@extends('layouts.app')

@section('template_title')
    {{ $entrada->name ?? 'Show Entrada' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Entrada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entradas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Venta Id:</strong>
                            {{ $entrada->venta_id }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $entrada->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
