<div class="form-group">
    <img src="{{ asset('Uploads/images') }}/{!! Auth::user()->photo !!}" alt="user avatar" />
</div>
                        
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nom') !!}
    <p>{!! $users->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    <p>{!! $users->email !!}</p>
</div>


<!-- Cin Field -->
<div class="form-group">
    {!! Form::label('cin', 'Cin:') !!}
    <p>{!! $users->cin !!}</p>
</div>

<!-- Adresse Field -->
<div class="form-group">
    {!! Form::label('adresse', 'Adresse:') !!}
    <p>{!! $users->adresse !!}</p>
</div>

<!-- Non Entreprise Field -->
<div class="form-group">
    {!! Form::label('non_entreprise', 'Non Entreprise:') !!}
    <p>{!! $users->non_entreprise !!}</p>
</div>

<!-- Numtel Field -->
<div class="form-group">
    {!! Form::label('numtel', 'Phone:') !!}
    <p>{!! $users->numtel !!}</p>
</div>

<!-- Domaine Field -->
<div class="form-group">
    {!! Form::label('domaine', 'Domaine') !!}
    <p>{!! $users->domaine !!}</p>
</div>
