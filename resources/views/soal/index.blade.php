@extends('admin-theme._master')

@section('judul', 'Data Soal')

@section('isi')

    <div class="row mt-2">
        <div class="col-10">
            <div class="card">
                <div class="card-header">Data Soal</div>

                <a href="{{ route('soal.add') }}" class="btn btn-primary float-end">Tambah Data</a>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama MK</th>
                                <th>Dosen</th>
                                <th>Jumlah Soal</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->nama_mk }}</td>
                                    <td>{{ $row->dosen }}</td>
                                    <td>{{ $row->jumlah_soal }}</td>
                                    <td>{{ $row->keterangan }}</td>
                                    <td>
                                        <form action="{{ route('soal.delete', $row->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            {{-- tombol hapus --}}
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda Yakin ?')">Hapus</button>
                                            <a href="{{ route('soal.edit', $row->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
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


@endsection
