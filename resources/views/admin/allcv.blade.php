@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Liste de cv</h1>
        <h1 class="pull-right">
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
<div class="panel-body">
    <div class="table-responsive">
        <table id="basicExample" class="table table-striped table-condensed table-bordered no-margin">
            <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Domaine</th>
            <th >Action</th>
            </thead>
            <tbody>
                @foreach($users as $users)
                <tr>
                    <td>{!! $users->name !!}</td>
                    <td>{!! $users->email !!}</td>
                    <td> {{ $name = substr(\App\Models\Admin\domaine::where('id', $users->domaine)->pluck('name'),2,-2) }}</td>
                    <td>
                        <div class='btn-group'>
                            <a href="{!! route('admin.cv.show', [$users->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-search"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
            </div>
        </div>
    </div>

@endsection