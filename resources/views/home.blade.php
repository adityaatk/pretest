@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Mahasiswa</title>
</head>
<body>
    <form method="GET" action="/tambah">
        <div class="col-md-6" style="margin-top:5px;">
            <button type="submit" class="btn ripple btn-raised btn-success">
                <div>
                    <span>Tambah Mahasiswa</span>
                </div>
            </button>
        </div>
    </form>

    <!-- start: Content -->
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>List Mahasiswa</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Opsi</th>
                            </tr>
                      </thead>
                      @foreach($mahasiswa as $m)
                      <tbody>
                      <tr>
                        <td>{{ $m->id }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->alamat }}</td>
                        <td>{{ $m->jenis_kelamin==1?"Laki-laki":"Perempuan"}}</td>
                        <td>
                            <form method="GET" action="/form/{{ $m->id }}/edit">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-outline btn-success">Edit </button>
                                    </div>
                            </form>
                            <form method="POST" action="/form/{{ $m->id }}">
                                @csrf
                                @method("DELETE")
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-outline btn-danger" >Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->

</body>
</html>
@endsection