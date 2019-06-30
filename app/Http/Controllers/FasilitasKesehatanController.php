<?php

namespace App\Http\Controllers;

use App\FasilitasKesehatan;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasKesehatanRequest;
use Session;

class FasilitasKesehatanController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function index()
    {
        $daftar_fasilitas_kesehatan = FasilitasKesehatan::all();
        $update_terakhir = FasilitasKesehatan::orderBy('updated_at', 'desc')->first();
        return view('fasilitas-kesehatan.index', compact('daftar_fasilitas_kesehatan', 'update_terakhir'));
    }

    public function create()
    {
        return view('fasilitas-kesehatan.create');
    }

    public function store(FasilitasKesehatanRequest $request)
    {
        FasilitasKesehatan::create($request->all());
        Session::flash('pesan', '1 Fasilitas Kesehatan Berhasil Disimpan');
        return redirect('fasilitas-kesehatan');
    }

    public function edit(FasilitasKesehatan $fasilitasKesehatan)
    {
        return view('fasilitas-kesehatan.edit', compact('fasilitasKesehatan'));
    }

    public function update(FasilitasKesehatanRequest $request, FasilitasKesehatan $fasilitasKesehatan)
    {
        $fasilitasKesehatan->update($request->all());
        Session::flash('pesan', '1 Fasilitas Kesehatan Berhasil Diupdate');
        return redirect('fasilitas-kesehatan');
    }

    public function destroy(FasilitasKesehatan $fasilitasKesehatan)
    {
        $fasilitasKesehatan->delete();
        Session::flash('pesan', '1 Fasilitas Kesehatan Berhasil Dihapus');
        return redirect('fasilitas-kesehatan');
    }
}
