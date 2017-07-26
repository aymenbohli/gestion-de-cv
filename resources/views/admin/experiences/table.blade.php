<table class="table table-responsive" id="basicExample">
    <thead>
        <th>Duree</th>
        <th>Entreprise</th>
        <th>Governorat</th>
        <th>Type</th>
        <th>Descreption</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($experiences as $experience)
        <tr>
            <td>{!! $experience->duree !!}</td>
            <td>{!! $experience->entreprise !!}</td>
            <td>{!! $experience->governorat !!}</td>
            <td>{!! $experience->type !!}</td>
            <td>{!! $experience->descreption !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.experiences.destroy', $experience->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.experiences.show', [$experience->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.experiences.edit', [$experience->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>