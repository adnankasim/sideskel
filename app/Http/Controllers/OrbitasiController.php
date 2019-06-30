<?php

namespace App\Http\Controllers;

use App\Orbitasi;
use Illuminate\Http\Request;
use App\Http\Requests\OrbitasiRequest;
use Session;

class OrbitasiController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function index()
    {
        $daftar_orbitasi = Orbitasi::all();
        $update_terakhir = Orbitasi::orderBy('updated_at', 'desc')->first();
        return view('orbitasi.index', compact('daftar_orbitasi', 'update_terakhir'));
    }

    public function create()
    {
        return view('orbitasi.create');
    }

    public function store(OrbitasiRequest $request)
    {
        Orbitasi::create($request->all());
        Session::flash('pesan', '1 Orbitasi Berhasil Disimpan');
        return redirect('orbitasi');
    }

    public function edit(Orbitasi $orbitasi)
    {
        return view('orbitasi.edit', compact('orbitasi'));
    }

    public function update(OrbitasiRequest $request, Orbitasi $orbitasi)
    {
        $orbitasi->update($request->all());
        Session::flash('pesan', '1 Orbitasi Berhasil Diupdate');
        return redirect('orbitasi');
    }

    public function destroy(Orbitasi $orbitasi)
    {
        $orbitasi->delete();
        Session::flash('pesan', '1 Orbitasi Berhasil Dihapus');
        return redirect('orbitasi');
    }
}
