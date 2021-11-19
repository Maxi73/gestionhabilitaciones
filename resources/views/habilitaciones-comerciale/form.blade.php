<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">

        <div class="form-group col-3">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $habilitacionesComerciales->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-3">
            {{ Form::label('fechaInicio') }}
            {{ Form::text('fechaInicio', $habilitacionesComerciales->fechaInicio, ['class' => 'form-control' . ($errors->has('fechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('fechaInicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-3">
            {{ Form::label('fechaVencimiento') }}
            {{ Form::text('fechaVencimiento', $habilitacionesComerciales->fechaVencimiento, ['class' => 'form-control' . ($errors->has('fechaVencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimiento']) }}
            {!! $errors->first('fechaVencimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-3">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $habilitacionesComerciales->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
