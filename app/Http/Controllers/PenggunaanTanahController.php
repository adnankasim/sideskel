<?php

namespace App\Http\Controllers;

use App\PenggunaanTanah;
use Illuminate\Http\Request;
use App\Http\Requests\PenggunaanTanahRequest;
use Session;

class PenggunaanTanahController extends Controller
{
    public function index()
    {
        $daftar_penggunaan_tanah = PenggunaanTanah::all();
        return view('penggunaan-tanah.index', compact('daftar_penggunaan_tanah'));
    }

    public function create()
    {
        return view('penggunaan-tanah.create');
    }

    public function store(PenggunaanTanahRequest $request)
    {
        PenggunaanTanah::create($request->all());
        Session::flash('pesan', '1 Penggunaan Tanah Berhasil Disimpan');
        return redirect('penggunaan-tanah');
    }

    public function edit(PenggunaanTanah $penggunaanTanah)
    {
        return view('penggunaan-tanah.edit', compact('penggunaanTanah'));
    }

    public function update(PenggunaanTanahRequest $request, PenggunaanTanah $penggunaanTanah)
    {
        $penggunaanTanah->update($request->all());
        Session::flash('pesan', '1 Penggunaan Tanah Berhasil Diupdate');
        return redirect('penggunaan-tanah');
    }

    public function destroy(PenggunaanTanah $penggunaanTanah)
    {
        $penggunaanTanah->delete();
        Session::flash('pesan', '1 Penggunaan Tanah Berhasil Dihapus');
        return redirect('penggunaan-tanah');
    }
}
