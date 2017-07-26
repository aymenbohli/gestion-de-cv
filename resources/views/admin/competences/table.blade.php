<table class="table table-responsive" id="competences-table">
    <thead>
        <th>Name</th>
        <th>Descreption</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($competences as $competences)
        <tr>
            <td>{!! $competences->name !!}</td>
            <td>{!! $competences->descreption !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.competences.destroy', $competences->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.competences.show', [$competences->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.competences.edit', [$competences->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>