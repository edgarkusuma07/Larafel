@extends('layouts.index')

@section('content')
<div class="container mt-4">
    <h2>Tambah Mahasiswa</h2>
    <form method="POST" action="{{ url('mahasiswa') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nim">nim:</label>
            <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan nim" required>
        </div>

        <div class="form-group">
            <label for="nama">nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" required>
        </div>

        <div class="form-group">
            <label for="alamat">alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat" required>
        </div>

        <div class="form-group">
            <label for="programstudi">programstudi:</label>
            <input type="text" name="programstudi" id="programstudi" class="form-control" placeholder="Masukkan programstudi" required>
        </div>

        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
</div>
@endsection
