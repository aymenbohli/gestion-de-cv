@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Entretiens</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="entretiens-table">
                    <thead>
                    <th>Periode</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Sujet</th>
                    <th>Entreprise</th>
                    </thead>
                    <tbody>
                    @foreach($entretien as $entretien)
                        <tr>
                            <td>{!! $entretien->periode !!}</td>
                            <td>{!! $entretien->date !!}</td>
                            <td>{!! $entretien->lieu !!}</td>
                            <td>{!! $entretien->sujet !!}</td>
                            <td>{{$name = substr(\App\User::where('id', $entretien->id_entreprise)->pluck('name'),2,-2) }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

