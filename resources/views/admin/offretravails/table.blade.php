<table class="table table-responsive" id="basicExample">
    <thead>
        <th>Nom</th>
        <th>Type</th>
        <th>Numposte</th>
        <th>Entreprise</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($offretravails as $offretravail)
        <tr>
            <td>{!! $offretravail->nom !!}</td>
            <td>{!! $offretravail->type !!}</td>
            <td>{!! $offretravail->numposte !!}</td>
            <td>{{$name = substr(\App\User::where('id', $offretravail->id_entreprise)->pluck('name'),2,-2) }}</td>
            <td>
                {!! Form::open(['route' => ['admin.offretravails.destroy', $offretravail->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.offretravails.show', [$offretravail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.offretravails.edit', [$offretravail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>