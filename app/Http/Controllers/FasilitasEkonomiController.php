<?php

namespace App\Http\Controllers;

use App\FasilitasEkonomi;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasEkonomiRequest;
use Session;

class FasilitasEkonomiController extends Controller
{
    public function index()
    {
        $daftar_fasilitas_ekonomi = FasilitasEkonomi::all();
        return view('fasilitas-ekonomi.index', compact('daftar_fasilitas_ekonomi'));
    }

    public function create()
    {
        return view('fasilitas-ekonomi.create');
    }

    public function store(FasilitasEkonomiRequest $request)
    {
        FasilitasEkonomi::create($request->all());
        Session::flash('pesan', '1 Fasilitas Ekonomi Berhasil Disimpan');
        return redirect('fasilitas-ekonomi');
    }

    public function edit(FasilitasEkonomi $fasilitasEkonomi)
    {
        return view('fasilitas-ekonomi.edit', compact('fasilitasEkonomi'));
    }

    public function update(FasilitasEkonomiRequest $request, FasilitasEkonomi $fasilitasEkonomi)
    {
        $fasilitasEkonomi->update($request->all());
        Session::flash('pesan', '1 Fasilitas Ekonomi Berhasil Diupdate');
        return redirect('fasilitas-ekonomi');
    }

    public function destroy(FasilitasEkonomi $fasilitasEkonomi)
    {
        $fasilitasEkonomi->delete();
        Session::flash('pesan', '1 Fasilitas Ekonomi Berhasil Dihapus');
        return redirect('fasilitas-ekonomi');
    }
}
