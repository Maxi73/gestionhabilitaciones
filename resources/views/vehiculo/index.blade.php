@extends('adminlte::page')

@section('title', 'Vehículo')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vehiculo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vehiculo.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Vehículo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabla" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Dominio</th>
										<th>Venc. seg.</th>
										<th>Venc.</th>
										<th>Venc. lic.</th>
										<th>Titular</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehiculos as $vehiculo)
                                        <tr>
											<td>{{ $vehiculo->marca }}</td>
											<td>{{ $vehiculo->modelo }}</td>
											<td>{{ $vehiculo->dominio }}</td>
											<td>{{ date('d-m-Y', strtotime($vehiculo->fechaVencimientoSeguro))  }}</td>
											<td>{{ date('d-m-Y', strtotime($vehiculo->fechaVencimientoVtv ))}}</td>
											<td>{{ date('d-m-Y', strtotime($vehiculo->fechaVencimientoLicencia ))}}</td>
											<td>{{ $vehiculo->titular_id }}</td>

                                            <td>
                                                <form action="{{ route('vehiculo.destroy',$vehiculo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vehiculo.show',$vehiculo->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vehiculo.edit',$vehiculo->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $vehiculos->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabla').DataTable();
        } );
    </script>
@stop
