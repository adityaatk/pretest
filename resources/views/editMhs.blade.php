@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Mahasiswa</title>
</head>
<body>
    <form method="POST" action="/form/{{$mahasiswa->id}}">
    @csrf
    @method("PUT")

    <div class="form-group"><label class="col-sm-2 control-label text-right">NIM</label>
        <div class="col-sm-10"><input type="number" min="1000000000" max="9999999999" name="nim" required value="{{$mahasiswa->id}}" class="form-control android"></div>
    </div>

    <div class="form-group"><label class="col-sm-2 control-label text-right">Nama</label>
        <div class="col-sm-10"><input type="text" class="form-control android" name="nama" required value="{{$mahasiswa->nama}}"></div>
    </div>

    <div class="form-group"><label class="col-sm-2 control-label text-right">Alamat</label>
        <div class="col-sm-10"><input type="textarea" class="form-control android" name="alamat" required value="{{$mahasiswa->alamat}}"></div>
    </div>

    <div class="form-group"><label class="col-sm-2 control-label text-right">Jenis Kelamin</label>
        <div class="col-sm-10">
        <div class="col-sm-12 padding-0">
                <select name="jenisKelamin" class="form-control">
                        <option value="1"{{ $mahasiswa->jenis_kelamin == "1" ? "selected" : "" }}>Laki-laki</option>
                        <option value="2"{{ $mahasiswa->jenis_kelamin == "2" ? "selected" : "" }}>Perempuan</option>
                </select>
    </div>
            <div>
                <button type="submit" class="btn btn-outline btn-success">Submit </button>
            </div>
    </form>
</body>
</html>
@endsection
