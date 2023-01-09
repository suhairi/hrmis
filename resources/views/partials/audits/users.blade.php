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
    @foreach($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>...{{ substr($user->user_type, -10, 10) }}</td>
            <td>{{ Str::limit($user->user->name, 5, '...') }} <br /> {{ $user->event }}</td>
            <td>{{ $user->auditable_id }} <br />...{{ substr($user->auditable_type, -10, 10) }}</td>
            <td>
                <strong>Old Values : </strong><br />
                @foreach($user->old_values as $attribute => $value)
                    {{ substr($value, 0, 15) }} <br />
                @endforeach
                <br />
                <strong>New Values : </strong><br />
                @foreach($user->new_values as $attribute => $value)
                    {{ substr($value, 0, 15) }} <br />
                @endforeach
            </td>
            <td>...{{ substr($user->url, -20, 20) }}</td>
            <td>{{ Str::limit($user->ip_address, 5, '...') }}</td>
            <td>{{ Str::limit($user->user_agent, 5, '...') }}</td>
            <td>{{ $user->tags }}</td>
            <td>{{ Str::limit($user->created_at, 15, '...') }}</td>
            <td>{{ Str::limit($user->updated_at, 15, '...') }}</td>
        </tr>
    @endforeach

</table>