<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{route('kelas.index')}}">Kembali</a>
    <hr>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('kelas.update',$kelas->id)}}" method="post">
        @csrf
        @method('put')
        <table>
            <tr>
                <th>Kode Kelas</th>
                <th><input type="text" name="kode_kelas"
                        value="{{old('kode_kelas') ? old('kode_kelas'):$kelas->kode_kelas}}"></th>
            </tr>
            <tr>
                <th>Nama Kelas</th>
                <th><input type="text" name="nama_kelas"
                        value="{{old('nama_kelas') ? old('nama_kelas'):$kelas->nama_kelas}}"></th>
            </tr>
        </table>
        <button type="submit" value="simpan">Simpan</button>
    </form>

</body>

</html>