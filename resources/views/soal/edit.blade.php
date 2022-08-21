@extends('admin-theme._master')

@section('judul', 'Data Soal')

@section('isi')

    <div class="row mt-2">
        <div class="col-10">
            <div class="card">
                <div class="card-header">Data Soal</div>

                <a href="{{ url('soal') }}" class="btn btn-warning float-end">kembali</a>

                <div class="card-body">
                    <form action="{{ url('soal.update', $soal->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nama MK</label>
                            <input type="text" class="form-control" name="nama_mk" value="{{ $soal->nama_mk }}">
                        </div>
                        <div class="form-group">
                            <label for="">Dosen</label>
                            <input type="text" class="form-control" name="dosen" value="{{ $soal->dosen }}">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Soal</label>
                            <input type="number" class="form-control" name="jumlah_soal" value="{{ $soal->jumlah_soal }}">
                        </div>
                        <div class="form-group">
                            <label for="">keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ $soal->keterangan }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('soal') }}" class="btn btn-warning">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
