@extends('layouts.index')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Edit Mahasiswa</h2>
            <form method="POST" action="{{ url('mahasiswa/'.$model->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label for="nim">nim:</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="{{ $model->nim }}">
                </div>
                <div class="form-group">
                    <label for="nama">nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $model->nama }}">
                </div>
                <div class="form-group">
                    <label for="alamat">alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $model->alamat }}">
                </div>
                <div class="form-group">
                    <label for="programstudi">programstudi:</label>
                    <input type="text" class="form-control" id="programstudi" name="programstudi" value="{{ $model->programstudi }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
