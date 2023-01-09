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
    @foreach($positions as $position)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>...{{ substr($position->user_type, -10, 10) }}</td>
            <td>{{ Str::limit($position->user->name, 5, '...') }} <br /> {{ $position->event }}</td>
            <td>{{ $position->auditable_id }} <br />...{{ substr($position->auditable_type, -10, 10) }}</td>
            <td>
                <strong>Old Values : </strong><br />
                @foreach($position->old_values as $attribute => $value)
                    {{ substr($value, 0, 15) }} <br />
                @endforeach
                <br />
                <strong>New Values : </strong><br />
                @foreach($position->new_values as $attribute => $value)
                    {{ substr($value, 0, 15) }} <br />
                @endforeach
            </td>
            <td>...{{ substr($position->url, -20, 20) }}</td>
            <td>{{ Str::limit($position->ip_address, 5, '...') }}</td>
            <td>{{ Str::limit($position->user_agent, 5, '...') }}</td>
            <td>{{ $position->tags }}</td>
            <td>{{ Str::limit($position->created_at, 15, '...') }}</td>
            <td>{{ Str::limit($position->updated_at, 15, '...') }}</td>
        </tr>
    @endforeach

</table>