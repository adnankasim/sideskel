<?php

namespace App\Http\Controllers;

use App\FasilitasPrasarana;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasPrasaranaRequest;
use Session;

class FasilitasPrasaranaController extends Controller
{
    public function index()
    {
        $daftar_fasilitas_prasarana = FasilitasPrasarana::all();
        $update_terakhir = FasilitasPrasarana::orderBy('updated_at', 'desc')->first();
        return view('fasilitas-prasarana.index', compact('daftar_fasilitas_prasarana', 'update_terakhir'));
    }

    public function create()
    {
        return view('fasilitas-prasarana.create');
    }

    public function store(FasilitasPrasaranaRequest $request)
    {
        FasilitasPrasarana::create($request->all());
        Session::flash('pesan', '1 Fasilitas Prasarana Berhasil Disimpan');
        return redirect('fasilitas-prasarana');
    }

    public function edit(FasilitasPrasarana $fasilitasPrasarana)
    {
        return view('fasilitas-prasarana.edit', compact('fasilitasPrasarana'));
    }

    public function update(FasilitasPrasaranaRequest $request, FasilitasPrasarana $fasilitasPrasarana)
    {
        $fasilitasPrasarana->update($request->all());
        Session::flash('pesan', '1 Fasilitas Prasarana Berhasil Diupdate');
        return redirect('fasilitas-prasarana');
    }

    public function destroy(FasilitasPrasarana $fasilitasPrasarana)
    {
        $fasilitasPrasarana->delete();
        Session::flash('pesan', '1 Fasilitas Prasarana Berhasil Dihapus');
        return redirect('fasilitas-prasarana');
    }
}
