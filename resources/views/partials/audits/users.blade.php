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
    @foreach($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->user_type }}</td>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->event }}</td>
            <td>{{ $user->auditable_type }}</td>
            <td>{{ $user->auditable_id }}</td>
            <td>
                @foreach($user->old_values as $attribute => $value)
                    {{ $value }} <br />
                @endforeach
            </td>
            <td>
                @foreach($user->new_values as $attribute => $value)
                    {{ $value }} <br />
                @endforeach
            </td>
            <td>{{ $user->url }}</td>
            <td>{{ $user->ip_address }}</td>
            <td>{{ $user->user_agent }}</td>
            <td>{{ $user->tags }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
        </tr>
    @endforeach

</table>