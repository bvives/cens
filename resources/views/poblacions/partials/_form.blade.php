<div class="form-group">
    {!! Form::label('name', 'Nom de la poblacio:') !!}
    @if (isset($poblacion))
    {!! Form::text('name',$poblacion->name,array("placeholder" => "Barcelona")) !!}
    @else
    {!! Form::text('name','',array("placeholder" => "Barcelona")) !!}
    @endif
</div>
<div class="form-group">
    {!! Form::label('habitants', 'habitants:') !!}
    {!! Form::number('habitants') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>