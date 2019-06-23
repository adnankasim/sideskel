<?php

namespace App\Http\Controllers;

use App\FasilitasPeribadatan;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasPeribadatanRequest;
use Session;

class FasilitasPeribadatanController extends Controller
{
    public function index()
    {
        $daftar_fasilitas_peribadatan = FasilitasPeribadatan::all();
        $update_terakhir = FasilitasPeribadatan::orderBy('updated_at', 'desc')->first();
        return view('fasilitas-peribadatan.index', compact('daftar_fasilitas_peribadatan', 'update_terakhir'));
    }

    public function create()
    {
        return view('fasilitas-peribadatan.create');
    }

    public function store(FasilitasPeribadatanRequest $request)
    {
        FasilitasPeribadatan::create($request->all());
        Session::flash('pesan', '1 Fasilitas Peribadatan Berhasil Disimpan');
        return redirect('fasilitas-peribadatan');
    }

    public function edit(FasilitasPeribadatan $fasilitasPeribadatan)
    {
        return view('fasilitas-peribadatan.edit', compact('fasilitasPeribadatan'));
    }

    public function update(FasilitasPeribadatanRequest $request, FasilitasPeribadatan $fasilitasPeribadatan)
    {
        $fasilitasPeribadatan->update($request->all());
        Session::flash('pesan', '1 Fasilitas Peribadatan Berhasil Diupdate');
        return redirect('fasilitas-peribadatan');
    }

    public function destroy(FasilitasPeribadatan $fasilitasPeribadatan)
    {
        $fasilitasPeribadatan->delete();
        Session::flash('pesan', '1 Fasilitas Peribadatan Berhasil Dihapus');
        return redirect('fasilitas-peribadatan');
    }
}
