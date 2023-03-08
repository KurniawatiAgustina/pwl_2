@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Kendaraan </h3>

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
                   
                            <th>NOPOL</th>
                            <th>MERK</th>
                            <th>JENIS</th>
                            <th>TAHUN_BUAT</th>
                            <th>WARNA</th>
                            
                        </tr>
                    </thead>
                </body>
                @foreach ($kendaraan as $no => $k)
                <tr>
                
                    <td>{{$k->no_pol}}</td>
                    <td>{{$k->merk}}</td>
                    <td>{{$k->jenis}}</td>
                    <td>{{$k->tahun_buat}}</td>
                    <td>{{$k->warna}}</td>
                  
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