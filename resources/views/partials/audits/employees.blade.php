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
    @foreach($employees as $employee)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $employee->user_type }}</td>
            <td>{{ $employee->user_id }}</td>
            <td>{{ $employee->event }}</td>
            <td>{{ $employee->auditable_type }}</td>
            <td>{{ $employee->auditable_id }}</td>
            <td>
                @foreach($employee->old_values as $attribute => $value)
                    {{ $value }} <br />
                @endforeach
            </td>
            <td>
                @foreach($employee->new_values as $attribute => $value)
                    {{ $value }} <br />
                @endforeach
            </td>
            <td>{{ $employee->url }}</td>
            <td>{{ $employee->ip_address }}</td>
            <td>{{ $employee->user_agent }}</td>
            <td>{{ $employee->tags }}</td>
            <td>{{ $employee->created_at }}</td>
            <td>{{ $employee->updated_at }}</td>
        </tr>
    @endforeach

</table>