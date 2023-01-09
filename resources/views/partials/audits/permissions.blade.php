<table class="table table-bordered table-hover table-striped">
    <tr>
        <thead>
            <th>#</th>
            <th>User Type</th>
            <th>User ID</th>
            <th>Event</th>
            <th>Auditable Type</th>
            <th>Auditable ID</th>
            <th>Old Values</th>
            <th>New Values</th>
            <th>URL</th>
            <th>IP Address</th>
            <th>User Agent</th>
            <th>Tags</th>
            <th>Created at</th>
            <th>Updated at</th>
        </thead>
    </tr>
    @foreach($permissions as $permission)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $permission->user_type }}</td>
            <td>{{ $permission->user_id }}</td>
            <td>{{ $permission->event }}</td>
            <td>{{ $permission->auditable_type }}</td>
            <td>{{ $permission->auditable_id }}</td>
            <td>
                @foreach($permission->old_values as $attribute => $value)
                    {{ $value }} <br />
                @endforeach
            </td>
            <td>
                @foreach($permission->new_values as $attribute => $value)
                    {{ $value }} <br />
                @endforeach
            </td>
            <td>{{ $permission->url }}</td>
            <td>{{ $permission->ip_address }}</td>
            <td>{{ $permission->user_agent }}</td>
            <td>{{ $permission->tags }}</td>
            <td>{{ $permission->created_at }}</td>
            <td>{{ $permission->updated_at }}</td>
        </tr>
    @endforeach

</table>