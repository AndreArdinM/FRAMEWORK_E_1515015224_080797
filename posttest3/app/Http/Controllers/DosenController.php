<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
    public function awal()
    {
        return "INI HALAMAN DOSEN";
    }

    public function tambah()
    {
        return $this->simpan();
    }

    public function simpan()
    {
        $dosen = new Dosen();
        $dosen->nama   = 'Drs. H. Uliman Hakim';
        $dosen->nip    = '1515015224121211';
        $dosen->alamat = 'Jln. KH.Wahid Hasyim';
        $dosen->pengguna_id = '4';
        $dosen->save();
        return "Data Dosen dengan nama {$dosen->nama} telah tersimpan di dalam database";
    }
}
