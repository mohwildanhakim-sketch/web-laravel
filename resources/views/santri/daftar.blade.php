@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        Daftar Santri
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>JK</th>
                <th>Orang Tua</th>
                <th>No HP</th>
            </tr>

            @foreach($santri as $s)
            <tr>
                <td>{{ $s['nama'] }}</td>
                <td>{{ $s['alamat'] }}</td>
                <td>{{ $s['jk'] }}</td>
                <td>{{ $s['ortu'] }}</td>
                <td>{{ $s['hp'] }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
