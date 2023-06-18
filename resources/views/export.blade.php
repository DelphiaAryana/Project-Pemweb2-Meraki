<!DOCTYPE html>
<html>
<head>
    <title>Export PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }


        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Data Skor Kuis</h1>
    <table>
        <thead>
            <tr>
                <th>Peringkat</th>
                <th>Nama</th>
                <th>Skor</th>
            </tr>
        </thead>
        <tbody>
            @php
                $n = 1;
            @endphp
            @foreach ($data as $skor)
                <tr align="center">
                    <td>{{ $n }}</td>
                    <td>{{ $skor->name }}</td>
                    <td>{{ $skor->poin_kuis }}</td>
                </tr>
            @php
                $n++;
            @endphp
            @endforeach
        </tbody>
    </table>
</body>
</html>
