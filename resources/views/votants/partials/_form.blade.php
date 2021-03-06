<div class="form-group">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name') !!}
</div>

@if (isset($votant))
<div class="form-group">
    {!! Form::label('dni', 'DNI:') !!}
    {!! Form::text('dni',$votant->dni,array("readonly")) !!}
</div>
@else
<div class="form-group">
    {!! Form::label('dni', 'DNI:') !!}
    {!! Form::text('dni','',array('min' => '9', 'max' => '9')) !!}
</div>
@endif
<div class="form-group">
    {!! Form::label('dataNaixement', 'Data de naixament:') !!}
    {!! Form::date('dataNaixement') !!}
</div>

 
<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>