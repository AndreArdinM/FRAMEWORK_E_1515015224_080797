<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
        return "INI HALAMAN MAHASISWA";
    }

    public function tambah()
    {
        return $this->simpan();
    }

    public function simpan()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama   = 'Andre Ardin Maulana';
        $mahasiswa->nim    = '1515015224';
        $mahasiswa->alamat = 'Jln. KH.Wahid Hasyim';
        $mahasiswa->pengguna_id = '1';
        $mahasiswa->save();
        return "Data Mahasiswa dengan nama {$mahasiswa->nama} telah tersimpan di dalam database";
    }
}
