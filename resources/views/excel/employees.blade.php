<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>No KP</th>
            <th>PPK</th>
        </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->nokp }}</td>
            <td>{{ $employee->ppk->code }} - {{ $employee->ppk->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>