<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>Leaves Management</h1>
    <p>{{ Carbon\Carbon::now() }}</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p>
  
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Bil</th>
                <th>Nama</th>
                <th>Type of Leave</th>
                <th>Start and End Date</th>
                <th>Duration</th>
            </tr>
        </thead>
        @if(!empty($leaves))
            @foreach($leaves as $leave)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $leave->employee->name }}</td>
                    <td>{{ $leave->type }}</td>
                    <td>{{ $leave->start_date->format('d M') }} - {{ $leave->end_date->format('d M Y') }}</td>
                    <td>{{ $leave->start_date->diffInDays($leave->end_date) }}</td>
                </tr>
            @endforeach
        @endif
    </table>  
  
</body>
</html>