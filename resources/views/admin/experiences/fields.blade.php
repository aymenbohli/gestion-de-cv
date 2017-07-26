<!-- Duree Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duree', 'Duree:') !!}
    {!! Form::number('duree', null, ['class' => 'form-control']) !!}
</div>

<!-- Entreprise Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entreprise', 'Entreprise:') !!}
    {!! Form::text('entreprise', null, ['class' => 'form-control']) !!}
</div>

<!-- Governorat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('governorat', 'Governorat:') !!}
    {!! Form::text('governorat', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Descreption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descreption', 'Descreption:') !!}
    {!! Form::text('descreption', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Clt Field -->
    <input type="hidden" value="{!! Auth::user()->id !!}" name="id_clt">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.experiences.index') !!}" class="btn btn-default">Cancel</a>
</div>
