<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Periode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periode', 'Periode:') !!}
    {!! Form::text('periode', null, ['class' => 'form-control']) !!}
</div>

<!-- Governorat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('governorat', 'Governorat:') !!}
    {!! Form::text('governorat', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Clt Field -->
    <input type="hidden" value="{!! Auth::user()->id !!}" name="id_clt">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.formations.index') !!}" class="btn btn-default">Cancel</a>
</div>
