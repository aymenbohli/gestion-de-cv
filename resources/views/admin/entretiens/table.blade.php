<table class="table table-responsive" id="basicExample">
    <thead>
        <th>Periode</th>
        <th>Date</th>
        <th>Lieu</th>
        <th>Sujet</th>
        <th>Client</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($entretiens as $entretien)
        <tr>
            <td>{!! $entretien->periode !!}</td>
            <td>{!! $entretien->date !!}</td>
            <td>{!! $entretien->lieu !!}</td>
            <td>{!! $entretien->sujet !!}</td>
            <td>{!! $entretien->id_clt !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.entretiens.destroy', $entretien->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.entretiens.show', [$entretien->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.entretiens.edit', [$entretien->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>