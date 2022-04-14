@extends('layouts.app')

@section('template_title')
    Salida
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salidas') }}
                            </span>
                            @can('salidas.create')
                             <div class="float-right">
                                <a href="{{ route('salidas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Entrada Id</th>
										<th>Nombre</th>
										<th>Salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($salidas as $salida)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $salida->entrada_id }}</td>
											<td>{{ $salida->nombre }}</td>
											<td>{{ $salida->salida }}</td>

                                            <td>
                                            @can('salidas.destroy')
                                                <form action="{{ route('salidas.destroy',$salida->id) }}" method="POST">
                                                    
                                                @can('salidas.show')
                                                <a class="btn btn-sm btn-primary " href="{{ route('salidas.show',$salida->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                @endcan    
                                                
                                                @can('salidas.edit')
                                                <a class="btn btn-sm btn-success" href="{{ route('salidas.edit',$salida->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $salidas->links() !!}
            </div>
        </div>
    </div>
@endsection
