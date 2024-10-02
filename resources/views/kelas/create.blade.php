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
    @if ($errors->all())
    <div class="allert allert-danger">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('kelas.store')}}" method='post'>
        @csrf
        <table>
            <tr>
                <th>Kode Kelas</th>
                <th>
                    <input type="text" name="kode_kelas" id="kode_kelas" placeholder="masukkan kode kelas">
                </th>
            </tr>
            <tr>
                <th>Nama Kelas</th>
                <th><input type="text" name="nama_kelas" id="nama_kelas" placeholder="masukkan nama kelas"></th>
            </tr>
        </table>
        <button type="submit" value="simpan">Simpan</button>
    </form>
</body>
</html>