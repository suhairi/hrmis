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
    @foreach($positions as $position)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $position->user_type }}</td>
            <td>{{ $position->user_id }}</td>
            <td>{{ $position->event }}</td>
            <td>{{ $position->auditable_type }}</td>
            <td>{{ $position->auditable_id }}</td>
            <td>
                @foreach($position->old_values as $attribute => $value)
                    {{ $value }} <br />
                @endforeach
            </td>
            <td>
                @foreach($position->new_values as $attribute => $value)
                    {{ $value }} <br />
                @endforeach
            </td>
            <td>{{ $position->url }}</td>
            <td>{{ $position->ip_address }}</td>
            <td>{{ $position->user_agent }}</td>
            <td>{{ $position->tags }}</td>
            <td>{{ $position->created_at }}</td>
            <td>{{ $position->updated_at }}</td>
        </tr>
    @endforeach

</table>