<?php

namespace App\Http\Controllers;

use App\InfraMelintasi;
use Illuminate\Http\Request;
use App\Http\Requests\InfraMelintasiRequest;
use Session;

class InfraMelintasiController extends Controller
{
    public function index()
    {
        $daftar_infrastruktur = InfraMelintasi::all();
        return view('infrastruktur-melintasi.index', compact('daftar_infrastruktur'));
    }

    public function create()
    {
        return view('infrastruktur-melintasi.create');
    }

    public function store(InfraMelintasiRequest $request)
    {
        InfraMelintasi::create($request->all());
        Session::flash('pesan', '1 Infrastruktur Berhasil Disimpan');
        return redirect('infrastruktur-melintasi');
    }

    public function edit(InfraMelintasi $infrastrukturMelintasi)
    {
        return view('infrastruktur-melintasi.edit', compact('infrastrukturMelintasi'));
    }

    public function update(InfraMelintasiRequest $request, InfraMelintasi $infrastrukturMelintasi)
    {
        $infrastrukturMelintasi->update($request->all());
        Session::flash('pesan', '1 Infrastruktur Berhasil Diupdate');
        return redirect('infrastruktur-melintasi');
    }

    public function destroy(InfraMelintasi $infrastrukturMelintasi)
    {
        $infrastrukturMelintasi->delete();
        Session::flash('pesan', '1 Infrastruktur Berhasil Dihapus');
        return redirect('infrastruktur-melintasi');
    }
}
