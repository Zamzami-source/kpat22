@extends('admin-theme._master')

@section('judul', 'Data Soal')

@section('isi')

    <div class="row mt-2">
        <div class="col-10">
            <div class="card">
                <div class="card-header">Data Soal</div>

                <a href="{{ url('soal') }}" class="btn btn-warning float-end">kembali</a>

                <div class="card-body">
                    <form action="{{ url('soal.save') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama MK</label>
                            <input type="text" class="form-control" name="nama_mk">
                        </div>
                        <div class="form-group">
                            <label for="">Dosen</label>
                            <input type="text" class="form-control" name="dosen">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Soal</label>
                            <input type="number" class="form-control" name="jumlah_soal">
                        </div>
                        <div class="form-group">
                            <label for="">keterangan</label>
                            <input type="text" class="form-control" name="keterangan">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
