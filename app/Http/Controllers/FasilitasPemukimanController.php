<?php

namespace App\Http\Controllers;

use App\FasilitasPemukiman;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasPemukimanRequest;
use Session;

class FasilitasPemukimanController extends Controller
{
    public function index()
    {
        $daftar_fasilitas_pemukiman = FasilitasPemukiman::all();
        $update_terakhir = FasilitasPemukiman::orderBy('updated_at', 'desc')->first();
        return view('fasilitas-pemukiman.index', compact('daftar_fasilitas_pemukiman', 'update_terakhir'));
    }

    public function create()
    {
        return view('fasilitas-pemukiman.create');
    }

    public function store(FasilitasPemukimanRequest $request)
    {
        FasilitasPemukiman::create($request->all());
        Session::flash('pesan', '1 Fasilitas Berhasil Disimpan');
        return redirect('fasilitas-pemukiman');
    }

    public function edit(FasilitasPemukiman $fasilitasPemukiman)
    {
        return view('fasilitas-pemukiman.edit', compact('fasilitasPemukiman'));
    }

    public function update(FasilitasPemukimanRequest $request, FasilitasPemukiman $fasilitasPemukiman)
    {
        $fasilitasPemukiman->update($request->all());
        Session::flash('pesan', '1 Fasilitas Pemukiman Berhasil Diupdate');
        return redirect('fasilitas-pemukiman');
    }

    public function destroy(FasilitasPemukiman $fasilitasPemukiman)
    {
        $fasilitasPemukiman->delete();
        Session::flash('pesan', '1 Fasilitas Pemukiman Berhasil Dihapus');
        return redirect('fasilitas-pemukiman');
    }
}
