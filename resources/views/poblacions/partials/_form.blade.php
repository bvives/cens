<div class="form-group">
    {!! Form::label('name', 'Nom de la poblacio:') !!}
    {!! Form::text('name','',array("placeholder" => "Barcelona")) !!}
</div>
<div class="form-group">
    {!! Form::label('habitants', 'habitants:') !!}
    {!! Form::number('habitants') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>