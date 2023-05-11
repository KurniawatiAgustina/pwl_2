<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Models\Mahasiswa;
use App\Models\Mahasiswa_Matakuliah;
use App\Models\Mahasiswamodel;
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
            'nama'=>'required|string|max:50',
            'kelas_id'=>'required',
            'jk'=>'required|in:l,p',
            'tempat_lahir'=>'required|string|max:50',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string|max:255',
            'hp'=>'required|digits_between:6,15'

        ]);
        Mahasiswamodel::create($request->all());
        return redirect('mahasiswa')
            ->with('success','Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */

        public function show($id)
        {
            $data = Mahasiswamodel::find($id);
            // $mahasiswa = Mahasiswa::with('kelas')->where('nim',$Nim)->first();
            return view('mahasiswa.detail', ['Mahasiswa' => $data]);
        }

        public function khs($id)
        {
            $data = Mahasiswamodel::find($id);
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
        $mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswa.create_mahasiswa')
            ->with('mhs',$mahasiswa)
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
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ]);

        $data = MahasiswaModel::where('id', '=', $id)->update($request->except(['_token','_method']));
        return redirect('mahasiswas')
            ->with('success','Mahasiswa Berhasil Ditambahkan');
    }

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
}

