@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Centreinterets
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($centreinterets, ['route' => ['admin.centreinterets.update', $centreinterets->id], 'method' => 'patch']) !!}

                        @include('admin.centreinterets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection