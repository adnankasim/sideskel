<?php

namespace App\Http\Controllers;

use App\Pelayanan;
use Illuminate\Http\Request;
use App\Http\Requests\PelayananRequest;
use Session;

class PelayananController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function index()
    {
        $daftar_pelayanan = Pelayanan::orderBy('id', 'desc')->paginate(25);
        $update_terakhir = Pelayanan::orderBy('updated_at', 'desc')->first();
        return view('pelayanan.index', compact('daftar_pelayanan', 'update_terakhir'));
    }

    public function create()
    {
        return view('pelayanan.create');
    }

    public function store(PelayananRequest $request)
    {
        Pelayanan::create($request->all());
        Session::flash('pesan', '1 Pelayanan Berhasil Disimpan');
        return redirect('pelayanan');
    }

    public function show(Pelayanan $pelayanan)
    {
        return view('pelayanan.detail', compact('pelayanan'));
    }

    public function edit(Pelayanan $pelayanan)
    {
        return view('pelayanan.edit', compact('pelayanan'));
    }

    public function update(PelayananRequest $request, Pelayanan $pelayanan)
    {
        $pelayanan->update($request->all());
        Session::flash('pesan', '1 Pelayanan Berhasil Diupdate');
        return redirect('pelayanan');
    }

    public function destroy(Pelayanan $pelayanan)
    {
        $pelayanan->delete();
        Session::flash('pesan', '1 Pelayanan Berhasil Dihapus');
        return redirect('pelayanan');
    }
}
