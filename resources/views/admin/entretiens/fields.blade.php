<!-- Periode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periode', 'Periode:') !!}
    {!! Form::text('periode', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Lieu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lieu', 'Lieu:') !!}
    {!! Form::text('lieu', null, ['class' => 'form-control']) !!}
</div>

<!-- Sujet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sujet', 'Sujet:') !!}
    {!! Form::text('sujet', null, ['class' => 'form-control']) !!}
</div>

    <input type="hidden" value="{!! Auth::user()->id !!}" name="">

<!-- Id Entreprise Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Empoyeur','Mail Empoyeur') !!}
    {!! Form::text('id_clt', null, ['class' => 'form-control']) !!}
</div>
<input type="hidden" value="{!! Auth::user()->id !!}" name="id_entreprise">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.entretiens.index') !!}" class="btn btn-default">Cancel</a>
</div>
