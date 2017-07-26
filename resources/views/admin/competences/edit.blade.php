@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Competences
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($competences, ['route' => ['admin.competences.update', $competences->id], 'method' => 'patch']) !!}

                        @include('admin.competences.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection