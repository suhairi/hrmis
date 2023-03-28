<table>
    <thead>
        <tr>
            <th><strong>#</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>No KP</strong></th>
            <th><strong>Jantina</strong></th>
            <th><strong>Jawatan</strong></th>
            <th><strong>Tarikh Lantikan</strong></th>
        </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->nokp }}</td>
            <td>{{ $employee->gender }}</td>
            <td>{{ $employee->position->name }}</td>
            <td>{{ \Carbon\Carbon::parse($employee->start_date)->format('d-m-Y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>