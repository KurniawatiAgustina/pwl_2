@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h3>

            {{-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div> --}}

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        
        <div class="card-body">
            <button class="btn btn-sm btn-success my-2" data-toggle="modal" data-target="#modal_mahasiswa">Tambah Data</button>
            {{-- <a href="{{ url('mahasiswa/create')}}" class="btn btn-sm
            btn-success">Tambah Data</a> --}}

            <table class="table table-bordered table-striped" id="data_mahasiswa">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    {{-- <th>Image</th>
                    <th>Kelas</th>
                    <th>Jk</th> --}}
                    <th>HP</th>
                    {{-- <th>Prodi</th> --}}
                    {{-- <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </table>


                <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
                    <form method="post" action="{{ url('mahasiswa') }}" role="form" class="form-horizontal" id="form_mahasiswas">
                    @csrf
                    <div class="modal-dialog modal-">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Default Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row form-message"></div>
                                <div class="form-group required row mb-2">
                                    <label class="col-sm-2 control-label col-form-label">NIM</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="nim" name="nim" value="" />
                                    </div>
                                </div>
                                <div class="form-group required row mb-2">
                                    <label class="col-sm-2 control-label col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="" />
                                    </div>
                                </div>
                                <div class="form-group required row mb-2">
                                    <label class="col-sm-2 control-label col-form-label">No. HP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="hp" name="hp" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <?php /*
                
                @if($mhs->count() > 0)
                @foreach ($mhs as $i => $m)
                <tr>
                  <td>{{++$i}}</td>
                  <td>{{$m->nim}}</td>
                  <td>{{$m->nama}}</td>
                  <td>
                    <img src="{{ asset('storage/' . $m->foto) }}" alt="{{ $m->nama }}" width="50">
                </td>
                  <td>{{$m->kelas->nama_kelas}}</td>
                  <td>{{$m->jk}}</td>
                  <td>{{$m->hp}}</td>
                  <td>{{$m->tempat_lahir}}</td>
                  <td>{{$m->tanggal_lahir}}</td>
                  <td>{{$m->alamat}}</td>
                  <td>
                    {{-- Bikin simbol edit dan delete --}}
                    <a href="{{url('/mahasiswa/'. $m->id)}}"
                        class="btn btn-sm btn-primary">Show</a>
                        <a href="{{url('/mahasiswa/'. $m->id.'/khs')}}"
                            class="btn btn-sm btn-primary">Nilai</a>
                    <a href="{{ url('/mahasiswa/'.$m->id.'/edit')}}" class="btn btn-sm btn-warning">edit</a>

                    <form class="inline" method="POST" action="{{ url('/mahasiswa/'.$m->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                    

                </td>
                
                </tr>
                @endforeach

                {{-- @else
                @if ($mhs->count() > 0)
                    @foreach($mhs as $i => $m)
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ada</td>
                            <td>{{ ++$i }}</td>
                            <td>{{ $m->nim }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $m->foto) }}" alt="{{ $m->nama }}" width="50">
                            </td>
                            <td>{{ $m->kelas->nama_kelas }}</td>
                            <td>{{ $m->jk }}</td>
                            <td>{{ $m->hp }}</td>
                            <td class="">
                                <a href="{{ url('/mahasiswa/' . $m->id) }}" class="btn btn-sm btn-info">
                                    Show
                                </a>
                                <a href="{{ url('/mahasiswa/' . $m->id . '/edit') }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>
                                <form class="d-inline" method="POST" action="{{ url('/mahasiswa/' . $m->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" href="{{ url('/mahasiswa/' . $m->id) }}"
                                            class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endif
                    @endforeach --}}
                @else
                    <tr>
                        <td colspan="6" class="text-center">Data tidak ada</td>
                    </tr>
                @endif
                 **/?>
                {{-- </tbody>
                
            </table> --}}
        {{-- </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card --> --}}

@endsection

@push('js')
<script>
     function updateData(th){
        $('#modal_mahasiswa').modal('show');
        $('#modal_mahasiswa .modal-title').html('Edit Data Mahasiswa');
        $('#modal_mahasiswa #nim').val($(th).data('nim'));
        $('#modal_mahasiswa #nama').val($(th).data('nama'));
        $('#modal_mahasiswa #hp').val($(th).data('hp'));
        $('#modal_mahasiswa #form_mahasiswa').attr('action', $(th).data('url'));
        $('#modal_mahasiswa #form_mahasiswa').append('<input type="hidden" name="_method" value="PUT">');
    }
    //ketika halaman selesai di load maka script akan di jalankan 
    $(document).ready(function (){
        var dataMahasiswa = $('#data_mahasiswa').DataTable({
            processing:true,
            serverSide:true,
            ajax:{
                'url': '{{  url('mahasiswa/data') }}',
                'dataType': 'json',
                'type': 'POST',
            },
            columns:[
                {data:'nomor',searchable:false, sortable:false},
                {data:'nim',name:'nim' ,sortable:false, searchable:true},
                {data:'nama',name: 'nama',sortable:false, searchable:true},
                {data:'hp',name:'hp',sortable:false, searchable:true},
                { data: 'id', name: 'id',sortable: false,searchable: false,
                        render: function(data, type, row) {
                            var btn = '<a href="{{ url("/mahasiswa/") }}/' + data + '/edit" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> Edit</a>' +
                                    '<a href="{{ url("/mahasiswa/") }}/' + data + '" class="btn btn-xs btn-info"><i class="fa fa-list"></i> Detail</a>' +
                                    '<form method="POST" action="{{ url("/mahasiswa/") }}/' + data + '">' +
                                        '@csrf @method("DELETE")' +
                                        '<button type="submit" class="btn btn-xs btn-danger" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')">' +
                                            '<i class="fa fa-trash"></i> Hapus' +
                                        '</button>' +
                                    '</form>';
                            return btn;
                        }
                    },
            ]
        });
        $('#form_mahasiswa').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                method: "POST",
                data: $(this).serialize(),
                dataType: 'json',
                success:function(data){
                    $('.form-message').html('');
                    if(data.status){
                        $('.form-message').html('<span class="alert alert-success" style="width: 100%">' + data.message + '</span>');
                        $('#form_mahasiswa')[0].reset();
                        dataMahasiswa.ajax.reload();
                        $('#form_mahasiswa').attr('action', '{{ url('mahasiswa') }}');
                        $('#form_mahasiswa').find('input[name="_method"]').remove();
                    }else{
                        $('.form-message').html('<span class="alert alert-danger" style="width: 100%">' + data.message + '</span>');
                        alert('error');
                    }

                    if(data.modal_close){
                        $('.form-message').html('');
                        $('#modal_mahasiswa').modal('hide');
                    }

                }
            });
        });
        });
</script>
    
@endpush


               