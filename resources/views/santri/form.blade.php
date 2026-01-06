@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        Form Pendaftaran Santri
    </div>
    <div class="card-body">
        <form method="POST" action="/santri/simpan">
            @csrf

            <div class="mb-2">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-2">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>

            <div class="mb-2">
                <label>Jenis Kelamin</label>
                <select name="jk" class="form-control">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>

            <div class="mb-2">
                <label>Nama Orang Tua</label>
                <input type="text" name="ortu" class="form-control">
            </div>

            <div class="mb-2">
                <label>No HP</label>
                <input type="text" name="hp" class="form-control">
            </div>

            <button class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>
@endsection
