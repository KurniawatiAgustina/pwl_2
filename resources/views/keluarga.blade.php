@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Daftar Keluarga  </h3>

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
                            <th>NAMA</th>
                            <th>JK</th>
                            <th>TGL-LAHIR</th>
                            <th>AGAMA</th>
                            <th>PEKERJAAN</th>
                            <th>STATUS</th>
                            
                        </tr>
                    </thead>
                </body>
                @foreach ($keluarga as $no => $h)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$h->nama}}</td>
                    <td>{{$h->jk}}</td>
                    <td>{{$h->tgl_lahir}}</td>
                    <td>{{$h->agama}}</td>
                    <td>{{$h->pekerjaan}}</td>
                    <td>{{$h->status}}</td>
                  
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