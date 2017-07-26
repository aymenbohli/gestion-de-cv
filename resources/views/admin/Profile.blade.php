@extends('layouts.app')
@section('content')

 @if(Auth::user()->hasRole('clt'))
 
 
<div class="row">
    <div class="panel-heading">
        <div class="pull-left">
            <h6 class="panel-title txt-dark">Gestion des comptes</h6>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-wrap">
                                @include('flash::message') 
                                        @include('adminlte-templates::common.errors')
                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/Profile') }}" enctype="multipart/form-data"> 
                                    {!! csrf_field() !!}
                                    <input type="hidden" value="{{ $errors->has('id') ? '' : $user->id }}" name="id">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label class="control-label mb-10">Nom</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $errors->has('name') ? '' : $user->name }}" >
                                                    @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Email</label>
                                                    <input type="text" class="form-control" name="email" value="{{ $errors->has('email') ? '' : $user->email }}" >
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!-- /Row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">phone</label>
                                                    <input type="text" class="form-control" name="numtel" value="{{ $errors->has('numtel') ? '' : $user->numtel }}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">password</label>
                                                    <input type="text" class="form-control" name="password" value="" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">photo</label>
                                                        {!! Form::file('photo', null, ['class' => 'form-control']) !!}

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">cin</label>
                                                    <input type="text" class="form-control" name="cin" value="{{ $errors->has('cin') ? '' : $user->cin }}" >
                                                </div>
                                            </div>
                                        </div>      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">date naissance</label>
                                                    <input type="text" class="form-control" name="datenais" value="{{ $errors->has('datenais') ? '' : $user->datenais }}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">adresse</label>
                                                    <input type="text" class="form-control" name="adresse" value="{{ $errors->has('adresse') ? '' : $user->adresse }}" >
                                                </div>
                                            </div>
                                        </div>
                                     <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Domaine</label>
                                                    {{form::select('domaine',$name = \App\Models\Admin\domaine::all()->pluck('name'),$user->domaine, ['class' => 'form-control'] ) }}
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="form-actions mt-10">
                                <button type="submit" class="btn btn-success  mr-10">Update</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>		
 
 
 
  @elseif(Auth::user()->hasRole('company'))

<div class="row">
    <div class="panel-heading">
        <div class="pull-left">
            <h6 class="panel-title txt-dark">Gestion des comptes</h6>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-wrap">
                                @include('flash::message') 
                                        @include('adminlte-templates::common.errors')
                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/Profile') }}" enctype="multipart/form-data"> 
                                    {!! csrf_field() !!}
                                    <input type="hidden" value="{{ $errors->has('id') ? '' : $user->id }}" name="id">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label class="control-label mb-10">Nom</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $errors->has('name') ? '' : $user->name }}" >
                                                    @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Email</label>
                                                    <input type="text" class="form-control" name="email" value="{{ $errors->has('email') ? '' : $user->email }}" >
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!-- /Row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">phone</label>
                                                    <input type="text" class="form-control" name="numtel" value="{{ $errors->has('numtel') ? '' : $user->numtel }}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">password</label>
                                                    <input type="text" class="form-control" name="password" value="" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">photo</label>
                                                        {!! Form::file('photo', null, ['class' => 'form-control']) !!}

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">cin</label>
                                                    <input type="text" class="form-control" name="cin" value="{{ $errors->has('cin') ? '' : $user->cin }}" >
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">adresse</label>
                                                    <input type="text" class="form-control" name="adresse" value="{{ $errors->has('adresse') ? '' : $user->adresse }}" >
                                                </div>
                                            </div>
                                        </div>
                                    
                                     <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Domaine</label>
                                                    {{form::select('domaine',$name = \App\Models\Admin\domaine::all()->pluck('name'),$user->domaine, ['class' => 'form-control'] ) }}

                                                </div>
                                            </div>
                                        </div>
                                     <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10"> Nom entreprise</label>
                                                    <input type="text" class="form-control" name="non_entreprise" value="{{ $errors->has('non_entreprise') ? '' : $user->non_entreprise }}" >
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="form-actions mt-10">
                                <button type="submit" class="btn btn-success  mr-10">Update</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  
  @else

<div class="row">
    <div class="panel-heading">
        <div class="pull-left">
            <h6 class="panel-title txt-dark">Gestion des comptes</h6>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-wrap">
                                @include('flash::message') 
                                        @include('adminlte-templates::common.errors')
                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/Profile') }}" enctype="multipart/form-data"> 
                                    {!! csrf_field() !!}
                                    <input type="hidden" value="{{ $errors->has('id') ? '' : $user->id }}" name="id">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label class="control-label mb-10">Nom</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $errors->has('name') ? '' : $user->name }}" >
                                                    @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Email</label>
                                                    <input type="text" class="form-control" name="email" value="{{ $errors->has('email') ? '' : $user->email }}" >
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">password</label>
                                                    <input type="text" class="form-control" name="password" value="" >
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="form-actions mt-10">
                                <button type="submit" class="btn btn-success  mr-10">Update</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  @endif 
  
  
@endsection
