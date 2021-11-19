<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">

            <div class="form-group col-3">
            {{ Form::label('Marca') }}
            {{ Form::text('marca', $vehiculo->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Modelo') }}
            {{ Form::text('modelo', $vehiculo->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Dominio') }}
            {{ Form::text('dominio', $vehiculo->dominio, ['class' => 'form-control' . ($errors->has('dominio') ? ' is-invalid' : ''), 'placeholder' => 'Dominio']) }}
            {!! $errors->first('dominio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Fecha Venc. Seguro') }}
            {{ Form::date('fechaVencimientoSeguro', $vehiculo->fechaVencimientoSeguro, ['class' => 'form-control' . ($errors->has('fechaVencimientoSeguro') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimientoseguro']) }}
            {!! $errors->first('fechaVencimientoSeguro', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Fecha Venc. Vtv') }}
            {{ Form::date('fechaVencimientoVtv', $vehiculo->fechaVencimientoVtv, ['class' => 'form-control' . ($errors->has('fechaVencimientoVtv') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimientovtv']) }}
            {!! $errors->first('fechaVencimientoVtv', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-3">
            {{ Form::label('Fecha Venc. Licencia') }}
            {{ Form::date('fechaVencimientoLicencia', $vehiculo->fechaVencimientoLicencia, ['class' => 'form-control' . ($errors->has('fechaVencimientoLicencia') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimientolicencia']) }}
            {!! $errors->first('fechaVencimientoLicencia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group  col-3">
            {{ Form::label('Titular') }}
            <select class="form-control select2-selection" name="titular_id" id="titular_id">
                @foreach($persona as $titular)
                        <option value="{{$titular['id']}}"> {{$titular['nombre']}} </option>
                @endforeach
            </select>

        </div>
        <div class="form-group col-3">
            {{ Form::label('Chofer') }}
            <select class="form-control" name="chofer_id" id="chofer_id">
                @foreach($persona as $chofer)
                    <option value="{{$chofer['id']}}"> {{$chofer['nombre']}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-3">
            {{ Form::label('Vehículo Contratado') }}
            <select class="form-control" name="vehiculoContratado" id="vehiculoContratado">
                    <option value="1"> SI </option>
                    <option value="0"> NO </option>
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
</div>
