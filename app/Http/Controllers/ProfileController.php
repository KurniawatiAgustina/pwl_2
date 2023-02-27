<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view ('profile')
            ->with('name', 'Kurniawati Agustina')
            ->with('nama', 'Niaaa')
            ->with('nim', '2141720040')
            ->with('kelas', 'TI-2B')
            ->with('absen', '11')
            ->with('prodi', 'D-IV Teknik Informatika')
            ->with('jurusan', 'Teknologi Informasi')
            ->with('univ', 'Politeknik Negeri Malang');
    }
}
