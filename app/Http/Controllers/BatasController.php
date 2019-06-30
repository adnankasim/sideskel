<?php

namespace App\Http\Controllers;

use App\Batas;
use Illuminate\Http\Request;
use App\Http\Requests\BatasRequest;
use Session;

class BatasController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function index()
    {
        $daftar_batas = Batas::all();
        $update_terakhir = Batas::orderBy('updated_at', 'desc')->first();
        return view('batas.index', compact('daftar_batas', 'update_terakhir')); 
    }

    public function create()
    {
        return view('batas.create'); 
    }

    public function store(BatasRequest $request)
    {
        Batas::create($request->all());
        Session::flash('pesan', '1 Batas Berhasil Disimpan');
        return redirect('batas');
    }

    public function edit(Batas $bata)
    {
        return view('batas.edit', compact('bata')); 
    }

    public function update(BatasRequest $request, Batas $bata)
    {
        $bata->update($request->all());
        Session::flash('pesan', '1 Batas Berhasil Diupdate');
        return redirect('batas');
    }

    public function destroy(Batas $bata)
    {
        $bata->delete();
        Session::flash('pesan', '1 Batas Berhasil Dihapus');
        return redirect('batas');
    }
}
