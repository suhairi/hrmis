<table class="table table-bordered table-hover table-striped">
    <tr>
        <thead>
            <th>#</th>
            <th>User Type</th>
            <th>User ID / Event</th>
            <th>Auditable ID/Type</th>
            <th>Old/New Values</th>
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
            <td>...{{ substr($permission->user_type, -10, 10) }}</td>
            <td>{{ Str::limit($permission->user->name, 5, '...') }} <br /> {{ $permission->event }}</td>
            <td>{{ $permission->auditable_id }} <br />...{{ substr($permission->auditable_type, -10, 10) }}</td>
            <td>
                <strong>Old Values : </strong><br />
                @foreach($permission->old_values as $attribute => $value)
                    {{ substr($value, 0, 15) }} <br />
                @endforeach
                <br />
                <strong>New Values : </strong><br />
                @foreach($permission->new_values as $attribute => $value)
                    {{ substr($value, 0, 15) }} <br />
                @endforeach
            </td>
            <td>...{{ substr($permission->url, -20, 20) }}</td>
            <td>{{ Str::limit($permission->ip_address, 5, '...') }}</td>
            <td>{{ Str::limit($permission->user_agent, 5, '...') }}</td>
            <td>{{ $permission->tags }}</td>
            <td>{{ Str::limit($permission->created_at, 15, '...') }}</td>
            <td>{{ Str::limit($permission->updated_at, 15, '...') }}</td>
        </tr>
    @endforeach

</table>