<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class RuanganController extends Controller
{
     public function awal()
    {
        return view('ruangan.awal', ['data' =>Ruangan::all()]);
    }
    
    public function tambah()
    {
        return view ('ruangan.tambah');
    }

    public function simpan(Request $input)
    {
        $ruangan = new Ruangan();
        $ruangan->title = $input->title;
        $informasi = $ruangan->save() ? 'berhasil simpan data' : 'Gagal simpan data';
        return redirect('ruangan')->with(['informasi =>$informasi']);
    }

    public function edit($id)
    {
        $ruangan = Raungan::find($id);
        return view('ruangan.edit')->with(array('ruangan'=>$ruangan));
    }

    public function lihat($id)
    {
        $ruangan = Ruangan::find($id);
        return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
    }

    public function update($id, Request $input)
    {
        $ruangan = Ruangan::find($id);
        $ruangan->title = $input->title;
        $informasi = $pengguna->save() ? 'berhasil update data' : 'Gagal update data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $ruangan = Ruangan::find($id);
        $informasi = $ruangan->delete() ? 'berhasil delete data' : 'Gagal hapus data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
}