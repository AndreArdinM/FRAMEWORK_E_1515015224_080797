<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\mahasiswa;

class Mahasiswa1 extends Controller
{
    public function awal()
    {
    	return "INI HALAMAN MAHASISWA";
    }

    public function tambahdata()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama   = 'Andre Ardin Maulana';
    	$mahasiswa->nim    = '1515015224';
    	$mahasiswa->alamat = 'Jln. KH.Wahid Hasyim';
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan nama {$mahasiswa->nama} telah tersimpan di dalam database";
    }
}