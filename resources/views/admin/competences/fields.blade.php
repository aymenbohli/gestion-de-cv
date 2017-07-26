<!-- Name Field -->
<div class="form-group col-sm-8">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Clt Field -->

  
    <input type="hidden" value="{!! Auth::user()->id !!}" name="id_clt">

<!-- Id Clt Field -->
<div class="form-group col-sm-8">
    {!! Form::label('id_clt', 'descreption') !!}
    {!! Form::textarea('descreption', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.competences.index') !!}" class="btn btn-default">Cancel</a>
</div>
