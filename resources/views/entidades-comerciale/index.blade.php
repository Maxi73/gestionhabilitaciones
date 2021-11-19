@extends('adminlte::page')

@section('title', 'Comercios')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Entidades Comerciales') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('entidadesComerciales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Comercio') }}
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
										<th>Nombre</th>
										<th>Domicilio</th>
										<th>Legajo</th>
										<th>Expediente</th>
										<th>Rubro</th>
										<th>Tipo</th>
										<th>Parada</th>
										<th>Partida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entidadesComerciales as $entidadesComerciale)
                                        <tr>
											<td>{{ $entidadesComerciale->nombre }}</td>
											<td>{{ $entidadesComerciale->domicilio }}</td>
											<td>{{ $entidadesComerciale->legajo }}</td>
											<td>{{ $entidadesComerciale->expediente }}</td>
											<td>{{ $entidadesComerciale->rubro }}</td>
											<td>{{ $entidadesComerciale->tipo }}</td>
											<td>{{ $entidadesComerciale->parada }}</td>
											<td>{{ $entidadesComerciale->partida }}</td>

                                            <td>
                                                <form action="{{ route('entidadesComerciales.destroy',$entidadesComerciale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('entidadesComerciales.show',$entidadesComerciale->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('entidadesComerciales.edit',$entidadesComerciale->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
                {!! $entidadesComerciales->links() !!}
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
