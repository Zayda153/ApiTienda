@extends('layouts.app')

@section('template_title')
    Entrada
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Entradas') }}
                            </span>
                            @can('entradas.create')
                             <div class="float-right">
                                <a href="{{ route('entradas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                              @endcan
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Venta Id</th>
										<th>Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entradas as $entrada)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $entrada->venta_id }}</td>
											<td>{{ $entrada->total }}</td>

                                            <td>
                                            @can('entradas.destroy')
                                                <form action="{{ route('entradas.destroy',$entrada->id) }}" method="POST">
                                                    
                                                @can('entradas.show')
                                                <a class="btn btn-sm btn-primary " href="{{ route('entradas.show',$entrada->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                @endcan    
                                                
                                                @can('entradas.edit')
                                                <a class="btn btn-sm btn-success" href="{{ route('entradas.edit',$entrada->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                @endcan 
                                                
                                                @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                @endcan 
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $entradas->links() !!}
            </div>
        </div>
    </div>
@endsection
