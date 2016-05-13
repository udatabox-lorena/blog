<table class="table table-responsive" id="users-table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <!--<th>Password</th>-->
        <th>Type</th>
        <!--<th>Remember Token</th>-->
        <th>Created At</th>
        <th>Updated At</th>
        <!--<th>Deleted At</th>-->
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->name !!}</td>
            <td>{!! $user->email !!}</td>
            <!--<td>{--!! $user->password !!--}</td>-->
            <td>{!! $user->type !!}</td>
            <!--<td>{--!! $user->remember_token !!--}</td>-->
            <td>{!! $user->created_at !!}</td>
            <td>{!! $user->updated_at !!}</td>
            <!--<td>{--!! $user->deleted_at !!--}</td>-->
            <td>
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>