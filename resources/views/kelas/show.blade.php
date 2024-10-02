<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Kode kelas</th>
            <th>: {{$kelas->kode_kelas}}</th>
        </tr>
        <tr>
            <th>Nama Kelas</th>
            <th>: {{$kelas->nama_kelas}}</th>
        </tr>
    </table>
    <hr><a href="{{route('kelas.index')}}"></a>
</body>

</html>