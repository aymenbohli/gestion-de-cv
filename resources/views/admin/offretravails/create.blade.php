@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Offretravail
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.offretravails.store']) !!}

                        @include('admin.offretravails.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
