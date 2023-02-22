<table class="table table-bordered table-hover table-striped">
    <tr>
        <thead>
            <tr class="bg-blue-500 text-white">
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
            </tr>
        </thead>
    </tr>
    @foreach($employees as $employee)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>...{{ substr($employee->user_type, -10, 10) }}</td>
            <td>{{ Str::limit($employee->user->name, 5, '...') }} <br /> {{ $employee->event }}</td>
            <td>{{ $employee->auditable_id }} <br />...{{ substr($employee->auditable_type, -10, 10) }}</td>
            <td>
                <strong>Old Values : </strong><br />
                @foreach($employee->old_values as $attribute => $value)
                    {{ substr($value, 0, 15) }} <br />
                @endforeach
                <br />
                <strong>New Values : </strong><br />
                @foreach($employee->new_values as $attribute => $value)
                    {{ substr($value, 0, 15) }} <br />
                @endforeach
            </td>
            <td>...{{ substr($employee->url, -20, 20) }}</td>
            <td>{{ Str::limit($employee->ip_address, 5, '...') }}</td>
            <td>{{ Str::limit($employee->user_agent, 5, '...') }}</td>
            <td>{{ $employee->tags }}</td>
            <td>{{ Str::limit($employee->created_at, 15, '...') }}</td>
            <td>{{ Str::limit($employee->updated_at, 15, '...') }}</td>
        </tr>
    @endforeach

</table>