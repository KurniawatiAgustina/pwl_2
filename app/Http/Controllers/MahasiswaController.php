<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Models\Mahasiswa;
use App\Models\Mahasiswa_Matakuliah;
use App\Models\Mahasiswamodel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;



class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = Mahasiswamodel::all();
        $mhs = MahasiswaModel::with('kelas')->get();
        return  view('mahasiswa.mahasiswa')
                        ->with('mhs',$mhs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = KelasModel::all();
        return  view('mahasiswa.create_mahasiswa',['kelas' => $kelas])
        ->with('url_form',url('/mahasiswa'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'nim'=>'required|string|max:10|unique:mahasiswas,nim',
            'nama'=>'required|string|max:50',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'kelas_id'=>'required',
            'jk'=>'required|in:l,p',
            'tempat_lahir'=>'required|string|max:50',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string|max:255',
            'hp'=>'required|digits_between:6,15'

        ]);
        // MahasiswaModel::insert($request->except(['_token']));
        $image_name = $request->file('foto')->store('images', 'public');
        MahasiswaModel::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'kelas_id' => $request->kelas_id,
        ]);
        return redirect('/mahasiswa')->with('success', 'Mahasiswa Berhasil Ditambahkan!');
    }

    //     Mahasiswamodel::create($request->all());
    //     return redirect('mahasiswa')
    //         ->with('success','Mahasiswa Berhasil Ditambahkan');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */

        public function show($id)
        {
            $data = Mahasiswamodel::where('mahasiswa_id',$id)->get();
            $data = Mahasiswamodel::find($id);
            // $mahasiswa = Mahasiswa::with('kelas')->where('nim',$Nim)->first();
            return view('mahasiswa.detail', ['Mahasiswa' => $data [0]]);
        }

        public function khs($id)
        {
            $data = Mahasiswamodel::where('id',$id)->first();
            $khs = Mahasiswa_Matakuliah::where('mahasiswa_id',$id)->get();
            // $mahasiswa = Mahasiswa::with('kelas')->where('nim',$Nim)->first();
            return view('mahasiswa.show_mahasiswa', ['data' => $data, 'khs'=>$khs]);
        }


    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = KelasModel::all();
        $mahasiswa = MahasiswaModel::where('id',$id)->get();
        return view('mahasiswa.create_mahasiswa')
            ->with('mhs',$mahasiswa[0])
            ->with('url_form',url('/mahasiswa/'.$id))
            ->with('kelas',$kelas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          //Melakukan validasi data
          $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswas,nim,'.$id,
            'nama' => 'required|string|max:50',
            'foto' => 'image|mimes:jpeg,png,jpg',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ]);

        MahasiswaModel::where('id', $id)->update($request->except('_token', '_method'));

        $image_name = $request->file('foto')->store('images', 'public');

        MahasiswaModel::where('id', $id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('/mahasiswa')->with('success', 'Mahasiswa Berhasil Diupdate!');
    }
    //     $image_name = $request->file('foto')->store('images', 'public');

    //     $data = MahasiswaModel::where('id', '=', $id)->update($request->except(['_token','_method']));
    //     return redirect('mahasiswas')
    //         ->with('success','Mahasiswa Berhasil Ditambahkan');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswamodel::where('id', '=', $id)->delete();
        return redirect('mahasiswa')
        ->with ('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function cetak_pdf($id) {
        $data = MahasiswaModel::where('id',$id)->first();
        $khs = Mahasiswa_Matakuliah::where('mahasiswa_id',$id)->get();
        $pdf = Pdf::loadview('mahasiswa.mahasiswa_pdf',['data' =>$data, 'khs' => $khs]);
        return $pdf->stream();
        // return view('mahasiswa.mahasiswa_pdf', ['data' => $data, 'khs' => $khs]);
    }
}

