@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Daftar Mata Kuliah  </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-stripped">
                <body>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>KODE</th>
                            <th> Mata Kuliah</th>
                            <th>Dosen Pengampu</th>
                            <th>SKS</th>
                            <th>Jam</th>
                            <th>Nilai</th>
                            
                        </tr>
                    </thead>
                </body>
                @foreach ($matakuliah as $no => $mk)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$mk->kode}}</td>
                    <td>{{$mk->nama_mk}}</td>
                    <td>{{$mk->dosen}}</td>
                    <td>{{$mk->sks}}</td>
                    <td>{{$mk->jam}}</td>
                    <td>{{$mk->nilai}}</td>
                   
                  
                </tr>
                    
                @endforeach
                
            </table>

        </div>

        {{-- <!-- /.card-body -->
        <div class="card=footer">
            Footer
        </div> --}}

        <!-- /.card-footer -->
    </div>
    <!-- /.card -->

    </section>
@endsection