<!DOCTYPE html>
<html>
<head>
    <title>MADA - HRMIS PPK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>


    <link rel="stylesheet" href="{{ URL::to('assets/css/pdf.css') }}">

</head>
<body>

    <div id="watermark">
        <img src="{{ URL::to('assets/img/watermark.png')}}" height="200" width="200" />
    </div>

    <div class="footer">Copyright &copy; 2023 - Lembaga Kemajuan Pertanian Muda (MADA)</div>

    <table class="table mb-4">
        <tr>
            <td width="70%">
                <h1>Senarai Pekerja</h1>
            </td>
            <td width="30%" align="left" class="text-xs">
                Lembaga Kemajuan Pertanian Muda <br />
                Pertubuhan Peladang Kawasan <br />
                PPK C1 - Kangar <br />
                04 - 772 8255
            </td>
        </tr>
    </table>

    <table class="min-w-full text-left my-text">
        <thead>
            <tr class="bg-gray-200 underline underline-offset-1">
                <th>#</th>
                <th>Nama</th>
                <th>No KP</th>
                <th>Jantina</th>
                <th>PPK / Jawatan </th>
                <th>Tarikh Lantikan / Status</th>
            </tr>
        </thead>
        <tbody>
        @if(!empty($employees))
            @foreach($employees as $employee)
                @if($loop->iteration / 45 == 1)
                    <div class="page_break"></div>
                @endif
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->nokp  }}</td>
                    <td>{{ $employee->gender  }}</td>
                    <td>{{ Str::limit($employee->position->name, 25, $end='...') }}</td>
                    <td class="text-center">{{ $employee->start_date->format('d M Y') }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


</body>
</html>