<div class="box box-info padding-1">
    <div class="box-body">
    <div class="row">

        <div class="form-group col-3">
            {{ Form::label('Apellido') }}
            {{ Form::text('apellido', $persona->apellido, ['class' => 'form-control', 'placeholder' => 'Apellido']) }}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $persona->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
        </div>
        <div class="form-group  col-3">
            {{ Form::label('Documento') }}
            {{ Form::text('documento', $persona->documento, ['class' => 'form-control', 'placeholder' => 'Documento']) }}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Fecha Nacimiento') }}
            {{ Form::date('fechaNacimiento', $persona->fechaNacimiento, ['class' => 'form-control', 'placeholder' => 'Fechanacimiento']) }}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Tipo') }}
            <select class="form-control" name="tipo" id="tipo">
                <option value="DNI"> DNI </option>
                <option value="CI"> CI </option>
                <option value="LE"> LE </option>
                <option value="LI"> LI </option>
                <option value="LI"> DU </option>
            </select>
        </div>
        <div class="form-group col-3">
            {{ Form::label('Prefijo Tel.') }}
            {{ Form::text('telefonoPrefijo', $persona->telefonoPrefijo, ['class' => 'form-control' . ($errors->has('telefonoPrefijo') ? ' is-invalid' : ''), 'placeholder' => 'Telefonoprefijo']) }}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Telefono') }}
            {{ Form::text('telefono', $persona->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Prefijo Movil') }}
            {{ Form::text('movilPrefijo', $persona->movilPrefijo, ['class' => 'form-control' . ($errors->has('movilPrefijo') ? ' is-invalid' : ''), 'placeholder' => 'Movilprefijo']) }}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Movil') }}
            {{ Form::text('movil', $persona->movil, ['class' => 'form-control' . ($errors->has('movil') ? ' is-invalid' : ''), 'placeholder' => 'Movil']) }}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Direccion') }}
            {{ Form::text('direccion', $persona->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Barrio') }}
            {{ Form::text('barrio', $persona->barrio, ['class' => 'form-control' . ($errors->has('barrio') ? ' is-invalid' : ''), 'placeholder' => 'Barrio']) }}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
        @if($persona->id)
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalLibreta">Cargar Libreta Sanitaria</button>
        @endif
    </div>
    </div>
</div>

<!-- Modal -->
<div id="modalLibreta" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cargar Libreta</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="box-body">

                    <form method="POST" action="{{ route('libretasSanitarias.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        @include('libretas-sanitaria.form')

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

