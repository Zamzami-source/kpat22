@extends('admin-theme._master')

@section('judul', 'Data Dosen')

@section('isi')

    <div class="row mt-2">
        <div class="col-20">
            <div class="card">
                <div class="card-header">Data Dosen</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama MK</th>
                                <th>Dosen</th>
                                <th>Jumlah Soal</th>
                                <th>Keterangan</th>
                                <th>Tanggal</th>
                                <th>Terakhir Diubah</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dosens as $dosen)
                            @endforeach
                            <tr>
                                <td>{{ $dosen->id }}</td>
                                <td>{{ $dosen->nama_mk }}</td>
                                <td>{{ $dosen->dosen }}</td>
                                <td>{{ $dosen->jumlah_soal }}</td>
                                <td>{{ $dosen->keterangan }}</td>
                                <td>{{ $dosen->created_at }}</td>
                                <td>{{ $dosen->update_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
