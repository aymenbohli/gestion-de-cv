@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Formation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($formation, ['route' => ['admin.formations.update', $formation->id], 'method' => 'patch']) !!}

                        @include('admin.formations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection