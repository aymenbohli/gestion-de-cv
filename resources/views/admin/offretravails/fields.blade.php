<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Numposte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numposte', 'Numposte:') !!}
    {!! Form::text('numposte', null, ['class' => 'form-control']) !!}
</div>

<!-- Descreption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descreption', 'Descreption:') !!}
    {!! Form::text('descreption', null, ['class' => 'form-control']) !!}
</div>


<input type="hidden" value="{!! Auth::user()->id !!}" name="id_entreprise">
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.offretravails.index') !!}" class="btn btn-default">Cancel</a>
</div>
