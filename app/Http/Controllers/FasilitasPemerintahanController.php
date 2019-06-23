<?php

namespace App\Http\Controllers;

use App\FasilitasPemerintahan;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasPemerintahanRequest;
use Session;

class FasilitasPemerintahanController extends Controller
{
    public function index()
    {
        $daftar_fasilitas_pemerintahan = FasilitasPemerintahan::all();
        $update_terakhir = FasilitasPemerintahan::orderBy('updated_at', 'desc')->first();
        return view('fasilitas-pemerintahan.index', compact('daftar_fasilitas_pemerintahan', 'update_terakhir'));
    }

    public function create()
    {
        return view('fasilitas-pemerintahan.create');
    }

    public function store(FasilitasPemerintahanRequest $request)
    {
        FasilitasPemerintahan::create($request->all());
        Session::flash('pesan', '1 Fasilitas Pemerintahan Berhasil Disimpan');
        return redirect('fasilitas-pemerintahan');
    }

    public function edit(FasilitasPemerintahan $fasilitasPemerintahan)
    {
        return view('fasilitas-pemerintahan.edit', compact('fasilitasPemerintahan'));
    }

    public function update(FasilitasPemerintahanRequest $request, FasilitasPemerintahan $fasilitasPemerintahan)
    {
        $fasilitasPemerintahan->update($request->all());
        Session::flash('pesan', '1 Fasilitas Pemerintahan Berhasil Diupdate');
        return redirect('fasilitas-pemerintahan');
    }

    public function destroy(FasilitasPemerintahan $fasilitasPemerintahan)
    {
        $fasilitasPemerintahan->delete();
        Session::flash('pesan', '1 Fasilitas Pemerintahan Berhasil Dihapus');
        return redirect('fasilitas-pemerintahan');
    }
}
