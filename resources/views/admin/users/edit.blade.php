@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Users
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($users, ['route' => ['admin.users.update', $users->id], 'method' => 'patch']) !!}
                   {!! csrf_field() !!}
                        @include('admin.users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection