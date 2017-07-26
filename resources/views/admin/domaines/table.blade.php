<table class="table table-responsive" id="basicExample">
    <thead>
        <th>Name</th>
        <th>Type</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($domaines as $domaine)
        <tr>
            <td>{!! $domaine->name !!}</td>
            <td>{!! $domaine->type !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.domaines.destroy', $domaine->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.domaines.show', [$domaine->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.domaines.edit', [$domaine->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>