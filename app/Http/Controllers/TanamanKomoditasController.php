<?php

namespace App\Http\Controllers;

use App\TanamanKomoditas;
use Illuminate\Http\Request;
use App\Http\Requests\TanamanKomoditasRequest;
use Session;

class TanamanKomoditasController extends Controller
{
    public function index()
    {
        $daftar_tahun = TanamanKomoditas::distinct('tahun')->pluck('tahun', 'tahun');
        $daftar_tanaman_komoditas = TanamanKomoditas::orderBy('tahun', 'desc')->paginate(25);
        return view('tanaman-komoditas.index', compact('daftar_tanaman_komoditas', 'daftar_tahun'));
    }

    public function create()
    {
        return view('tanaman-komoditas.create');
    }

    public function store(TanamanKomoditasRequest $request)
    {
        TanamanKomoditas::create($request->all());
        Session::flash('pesan', '1 Tanaman Komoditas Berhasil Disimpan');
        return redirect('tanaman-komoditas');
    }

    public function edit(TanamanKomoditas $tanamanKomodita)
    {
        return view('tanaman-komoditas.edit', compact('tanamanKomodita'));
    }

    public function update(TanamanKomoditasRequest $request, TanamanKomoditas $tanamanKomodita)
    {
        $tanamanKomodita->update($request->all());
        Session::flash('pesan', '1 Tanaman Komoditas Berhasil Diupdate');
        return redirect('tanaman-komoditas');
    }

    public function destroy(TanamanKomoditas $tanamanKomodita)
    {
        $tanamanKomodita->delete();
        Session::flash('pesan', '1 Tanaman Komoditas Berhasil Dihapus');
        return redirect('tanaman-komoditas');
    }

    public function urutkan(Request $request)
    {
        $daftar_tanaman_komoditas = TanamanKomoditas::where('tahun', $request->input('tahun'))->orderBy('produksi_per_ha', 'asc')->get();
        $daftar_tahun = TanamanKomoditas::distinct('tahun')->pluck('tahun', 'tahun');
        return view('tanaman-komoditas.urutkan', compact('daftar_tanaman_komoditas', 'daftar_tahun'));
    }
}
