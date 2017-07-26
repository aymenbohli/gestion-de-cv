<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{!! $offretravail->nom !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $offretravail->type !!}</p>
</div>

<!-- Numposte Field -->
<div class="form-group">
    {!! Form::label('numposte', 'Numposte:') !!}
    <p>{!! $offretravail->numposte !!}</p>
</div>

<!-- Descreption Field -->
<div class="form-group">
    {!! Form::label('descreption', 'Descreption:') !!}
    <p>{!! $offretravail->descreption !!}</p>
</div>

<!-- Id Entreprise Field -->
<div class="form-group">
    {!! Form::label('id_entreprise', 'Id Entreprise:') !!}
    <p>{!! $offretravail->id_entreprise !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $offretravail->created_at !!}</p>
</div>
