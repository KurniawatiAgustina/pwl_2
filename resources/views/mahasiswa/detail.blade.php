@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    {{-- <div class="card">
        <div class="card-header">
            <h3 class="card-title">DATA MAHASISWA</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div> --}}
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="card" style="width: 24rem;">
                    <div class="card-header">
                        Detail Mahasiswa
                    </div>
        <div class="card-body">
            <div class="d-flex justify-content-center">
                {{-- <img src="{{ asset('storage/' . $mahasiswa->foto) }}" width="240"> --}}
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nim : </b>{{$mahasiswa->nim}}</li>
                <li class="list-group-item"><b>Nama : </b>{{$mahasiswa->nama}}</li>
                {{-- <li class="list-group-item"><b>Kelas : </b>{{$Mahasiswa->kelas->nama_kelas}}</li>
                <li class="list-group-item"><b>Jk : </b>{{$Mahasiswa->jk}}</li>
                <li class="list-group-item"><b>Tempat_lahir : </b>{{$Mahasiswa->tempat_lahir}}</li>
                <li class="list-group-item"><b>Tanggal_lahir : </b>{{$Mahasiswa->tanggal_lahir}}</li>
                <li class="list-group-item"><b>Alamat : </b>{{$Mahasiswa->alamat}}</li> --}}
                <li class="list-group-item"><b>Hp : </b>{{$mahasiswa->hp}}</li>
            </ul>
        </div>
    </div>
       
      
    <!-- /.card -->

    </section>
@endsection