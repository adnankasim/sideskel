<?php

namespace App\Http\Controllers;

use App\FasilitasPendidikan;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasPendidikanRequest;
use Session;

class FasilitasPendidikanController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function index()
    {
        $daftar_fasilitas_pendidikan = FasilitasPendidikan::all();
        $update_terakhir = FasilitasPendidikan::orderBy('updated_at', 'desc')->first();
        return view('fasilitas-pendidikan.index', compact('daftar_fasilitas_pendidikan', 'update_terakhir'));
    }

    public function create()
    {
        return view('fasilitas-pendidikan.create');
    }

    public function store(FasilitasPendidikanRequest $request)
    {
        FasilitasPendidikan::create($request->all());
        Session::flash('pesan', '1 Fasilitas Pendidikan Berhasil Disimpan');
        return redirect('fasilitas-pendidikan');
    }

    public function edit(FasilitasPendidikan $fasilitasPendidikan)
    {
        return view('fasilitas-pendidikan.edit', compact('fasilitasPendidikan'));
    }

    public function update(FasilitasPendidikanRequest $request, FasilitasPendidikan $fasilitasPendidikan)
    {
        $fasilitasPendidikan->update($request->all());
        Session::flash('pesan', '1 Fasilitas Pendidikan Berhasil Diupdate');
        return redirect('fasilitas-pendidikan');
    }

    public function destroy(FasilitasPendidikan $fasilitasPendidikan)
    {
        $fasilitasPendidikan->delete();
        Session::flash('pesan', '1 Fasilitas Pendidikan Berhasil Dihapus');
        return redirect('fasilitas-pendidikan');
    }
}
