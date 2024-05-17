@extends('layout.app')

@section('title', 'Mahasiswa')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Mahasiswa</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
           <a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no =1; ?>
                        @foreach ($mahasiswa as $row)
                            
                        @endforeach
                        <tr class="text-center">
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->alamat }}</td>
                            <td>{{ $row->no_telp }}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
