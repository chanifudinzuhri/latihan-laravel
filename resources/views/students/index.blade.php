<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table Students</title>
</head>
<body>
    <a href="{{ url('students/create') }}">Tambah Data</a>
    <br></br>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>

        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($query as $student)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>
                        <a href="#">Edit</a>
                        <br>
                        <a href="{{ url('students/delete') }}/{{ $student->id }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
