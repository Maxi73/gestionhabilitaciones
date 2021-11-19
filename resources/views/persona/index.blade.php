@extends('adminlte::page')

@section('title', 'Persona')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Persona') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('persona.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Persona') }}
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

                            <table id="tabla" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Apellido</th>
										<th>Nombre</th>
										<th>Documento</th>
										<th>Fecha Nac.</th>
										<th>Movil</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personas as $persona)
                                        <tr>
											<td>{{ $persona->apellido }}</td>
											<td>{{ $persona->nombre }}</td>
											<td>{{ $persona->documento }}</td>
											<td>{{ date('d-m-Y', strtotime($persona->fechaNacimiento ))}}</td>
											<td>{{ $persona->movilPrefijo }} - {{ $persona->movil }}</td>
                                            <td>
                                                <form action="{{ route('persona.destroy',$persona->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('persona.show',$persona->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('persona.edit',$persona->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
                {!! $personas->links() !!}
            </div>
        </div>

@stop

@section('js')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabla').DataTable();
        } );
    </script>
@stop
