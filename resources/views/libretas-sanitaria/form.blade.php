<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('fechaVencimiento') }}
            {{ Form::date('fechaVencimiento', $libretasSanitarias->fechaVencimiento, ['class' => 'form-control' . ($errors->has('fechaVencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimiento']) }}
            {!! $errors->first('fechaVencimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('medicoFirmante') }}
            {{ Form::text('medicoFirmante', $libretasSanitarias->medicoFirmante, ['class' => 'form-control' . ($errors->has('medicoFirmante') ? ' is-invalid' : ''), 'placeholder' => 'Medicofirmante']) }}
            {!! $errors->first('medicoFirmante', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('persona_id') }}
            {{ Form::text('persona_id', $libretasSanitarias->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => 'Persona Id']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
