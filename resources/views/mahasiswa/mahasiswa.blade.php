@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Mahasiswa</h3>

            {{-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div> --}}
        </div>
        <div class="card-body">
            <a href="{{ url('mahasiswa/create')}}" class="btn btn-sm
            btn-success">Tambah Data</a>

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jk</th>
                    <th>HP</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($mhs->count() > 0)
                @foreach ($mhs as $i => $m)
                <tr>
                  <td>{{++$i}}</td>
                  <td>{{$m->nim}}</td>
                  <td>{{$m->nama}}</td>
                  <td>{{$m->jk}}</td>
                  <td>{{$m->hp}}</td>
                  <td>{{$m->tempat_lahir}}</td>
                  <td>{{$m->tanggal_lahir}}</td>
                  <td>{{$m->alamat}}</td>
                  <td>
                    {{-- Bikin simbol edit dan delete --}}
                    <a href="{{ url('/mahasiswa/'.$m->id.'/edit')}}" class="btn btn-sm btn-warning">edit</a>

                    <form class="inline" method="POST" action="{{ url('/mahasiswa/'.$m->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                    

                </td>
                
                </tr>
                @endforeach

                @else
                <tr><td colspan="9" class="text-center">Data Tidak Ada</td></tr>
                    
                @endif
            </tbody>      
              </table>   
    </div>
    <!-- /.card -->

    </section>
@endsection