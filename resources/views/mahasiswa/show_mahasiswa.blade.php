@extends('layout.template')

@section('content')
<div class="card">
    {{-- <div class="card-header">
        <h1>Detail data</h1>
        <div class="d-flex justify-content-center">
            <img src="{{ asset('storage/' . $data->foto) }}" width="240">
        </div> --}}
    <h4 class="text-center">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h4>
    <h3 class="text-center">KARTU HASIL STUDI (KHS)</h3>

    <p><span class="font-weight-bold">Nama:</span> {{$data->nama}}</p>
    <p><span class="font-weight-bold">NIM:</span> {{$data->nim}}</p>
    <p><span class="font-weight-bold">Kelas:</span> {{$data->kelas->nama_kelas}}</p>
    <table class="table table-bordered table-striped mt-2 text-center">
    {{-- <table class="table table-striped">
        <a href="{{ url('/data/cetak_pdf/' . $data->id) }}"
             class="btn btn-primary">Cetak KRS</a>
        <table class="table table-bordered table-striped mt-2 text-center"> --}}
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>MataKuliah</th>
            <th>Dosen</th>
            <th>SKS</th>
            <th>Jam</th>
            <th>Nilai</th>
        </tr>
        </thead>
        <tbody>
        @if($khs->count() > 0)
            @foreach($khs as $i => $m)
                <tr>
                  <td>{{++$i}}</td>
                    <td>{{ $m->matkul->kode}}</td>
                    <td>{{ $m->matkul->nama_mk }}</td>
                    <td>{{ $m->matkul->dosen }}</td>
                    <td>{{ $m->matkul->sks }}</td>
                    <td>{{ $m->matkul->jam }}</td>
                    <td>{{ $m->nilai}}</td>
                </tr>
            @endforeach
        @else
            <tr>
                
                <td colspan="8" class="text-center">Data tidak ada</td>
            </tr>
        @endif

        </tbody>
    </table>
    <a href="{{ url('/mahasiswa/cetak_pdf/' . $data->id) }}" class="btn btn-primary">Cetak KRS</a>
@endsection