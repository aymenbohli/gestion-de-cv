<table class="table table-responsive" id="basicExample">
    <thead>
        <th>Name</th>
        <th>Periode</th>
        <th>Governorat</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($formations as $formation)
        <tr>
            <td>{!! $formation->name !!}</td>
            <td>{!! $formation->periode !!}</td>
            <td>{!! $formation->governorat !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.formations.destroy', $formation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.formations.show', [$formation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.formations.edit', [$formation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>