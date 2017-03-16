<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class PenggunaController extends Controller
{
    public function awal()
    {
    	return "Hello dari PenggunaController";
    }
    public function tambah()
    {
        return $this->simpan();
    }
    public function tambah1()
    {
        return $this->simpan2();
    }
    public function simpan()
    {
        $pengguna = new Pengguna();
        $pengguna->username = 'jon_doe';
        $pengguna->password = 'doe_jon';
        $pengguna->save();
        return "data dengan username {$pengguna->username} telah disimpan";
    }
    public function simpan2()
    {
        $pengguna = new Pengguna();
        $pengguna->username = 'dosen';
        $pengguna->password = 'dosen';
        $pengguna->save();
        return "data dengan username {$pengguna->username} telah disimpan";
    }
}