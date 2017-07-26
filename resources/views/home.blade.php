@extends('layouts.app')

@section('content')

 @role('clt')
 <h1>liste de offre d'emplois</h1>



 <table class="table table-responsive" id="basicExample">
    <thead>
        <th>Nom</th>
        <th>Type</th>
        <th>Numposte</th>
        <th>nom Entreprise</th>
        <th>created</th>
        <th></th>
    </thead>
    <tbody>
    @foreach($offretravails as $offretravail)
        <tr>
            <td>{!! $offretravail->nom !!}</td>
            <td>{!! $offretravail->type !!}</td>
            <td>{!! $offretravail->numposte !!} </td>
            <td>{!! substr($countCompany = \App\Models\Admin\users::where('id', '=', $offretravail->id_entreprise)->get()->pluck('name') ,2,-2)!!}</td>
            <th>{{ $offretravail->created_at }}</th>
            <td>
                
                <div class='btn-group'>
                    <a href="{!! route('admin.offretravails.show', [$offretravail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 @else
<!-- Styles -->
<style>
    #chartdiv {
        width: 100%;
        height: 500px;
    }
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- Chart code -->

<script>
    var chart = AmCharts.makeChart("chartdiv", {
        "type": "pie",
        "theme": "light",
        "dataProvider": [
                @foreach($users as $users)
            {
                "country": "{!! $users->b !!}",
                "litres": "{!! $users->a !!}"
            },
            @endforeach

            ],
        "valueField": "litres",
        "titleField": "country",
        "balloon": {
            "fixedPosition": true
        },
        "export": {
            "enabled": false
        }
    });
</script>

<!-- HTML -->







<!-- Styles -->
<style>
    #chartdiv2 {
        width		: 100%;
        height		: 500px;
        font-size	: 11px;
    }					
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- Chart code -->
<script>
    var chart = AmCharts.makeChart("chartdiv2", {
        "type": "serial",
        "theme": "light",
        "dataProvider": [

                @foreach($offre as $offre)
            {
                "country": "{!! $offre->a !!}",
                "visits": "{!! $offre->b !!}"
            },
                @endforeach



            ],
        "valueAxes": [{
                "gridColor": "#FFFFFF",
                "gridAlpha": 0.2,
                "dashLength": 0
            }],
        "gridAboveGraphs": true,
        "startDuration": 1,
        "graphs": [{
                "balloonText": "[[category]]: <b>[[value]]</b>",
                "fillAlphas": 0.8,
                "lineAlpha": 0.2,
                "type": "column",
                "valueField": "visits"
            }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "country",
        "categoryAxis": {
            "gridPosition": "start",
            "gridAlpha": 0,
            "tickPosition": "start",
            "tickLength": 20
        },
        "export": {
            "enabled": false
        }

    });
</script>

<!-- HTML -->





<div class="row">
    <div class="col-md-6 col-sm-4">
        <!-- Row Starts -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog">
                    <div class="blog-header">
                        <h5 class="blog-title">statistique de cv selon domaines</h5>
                    </div>
                    <div class="blog-body">
                        <div id="chartdiv"></div>											</div>
                </div>
            </div>
        </div>
        <!-- Row Ends -->
    </div>
    <div class="col-md-6 col-sm-4">
        <!-- Row Starts -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog">
                    <div class="blog-header">
                        <h5 class="blog-title">statistique de offres selon le type de post</h5>
                    </div>
                    <div class="blog-body">
                       <div id="chartdiv2"></div>												</div>
                </div>
            </div>
        </div>
        <!-- Row Ends -->
    </div>


</div>
@endrole

@endsection
