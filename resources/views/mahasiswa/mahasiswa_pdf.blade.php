<!DOCTYPE html>
<html>
<head>
    <title>Laporan KRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .text-center {
            text-align: center;
        }
        .table {
            width: 100%;
            margin: 0 1rem;
            color: #212529;
            border: 3px solid #262626;
        }
        table tr td, table tr th {
            border: 1px solid #262626;
            padding: 0.5rem;
        }
    </style>
</head>
<body>
<div class="text-center">
    <h3>Laporan KRS</h3>
</div>
<ul>
    <li>Nim : </b>{{ $data->nim }}</li>
    <li>Nama : </b>{{ $data->nama }}</li>
    <li>Kelas : </b>{{ $data->kelas->nama_kelas }}</li>
    {{-- <li><b>Jenis Kelamin : </b>{{ $data->jk }}</li>
    <li><b>Tempat Lahir : </b>{{ $data->tempat_lahir }}</li>
    <li><b>Tanggal Lahir : </b>{{ $data->tanggal_lahir }}</li>
    <li><b>Alamat : </b>{{ $data->alamat }}</li>
    <li><b>No. Hp : </b>{{ $data->hp }}</li> --}}
</ul>
<table class="table text-center">
    <thead>
    {{-- <tr>
        <th>MataKuliah</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Nilai</th>
    </tr>
    </thead>
    <tbody>
    @if($khs->count() > 0)
        @foreach($khs as $row)
            <tr>
                <td>{{ $row->matkul->matakuliah }}</td>
                {{-- <td>{{ $row->matkul->nama }}</td> --}}
                {{-- <td>{{ $row->matkul->sks }}</td>
                <td>{{ $row->matkul->semester }}</td>
                <td>{{ $row->nilai}}</td>
            </tr> --}} 

            <thead>
                <tr>
                    {{-- <th>No</th> --}}
                    <th>KODE</th>
                    <th> Mata Kuliah</th>
                    <th>Dosen Pengampu</th>
                    <th>SKS</th>
                    <th>Jam</th>
                    <th>Nilai</th>
                    
                </tr>
            </thead>
        <tbody>
        @if($khs->count() > 0)
        @foreach ($khs as $no => $mk)
        <tr>
            <td>{{$no}}</td>
            <td>{{$mk->matkul->kode}}</td>
            <td>{{$mk->matkul->nama_mk}}</td>
            <td>{{$mk->matkul->dosen}}</td>
            <td>{{$mk->matkul->sks}}</td>
            <td>{{$mk->matkul->jam}}</td>
            <td>{{$mk->matkul->nilai}}</td>
        </tr>
        @endforeach
        @else
   
        <tr>
            <td colspan="8" class="text-center">Data tidak ada</td>
        </tr>
        @endif
    </tbody>
</table>
</body>
</html>