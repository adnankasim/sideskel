<?php

namespace App\Http\Controllers;

use App\KesuburanTanah;
use Illuminate\Http\Request;
use App\Http\Requests\KesuburanTanahRequest;
use Session;

class KesuburanTanahController extends Controller
{
    public function index()
    {
        $daftar_kesuburan_tanah = KesuburanTanah::all();
        return view('kesuburan-tanah.index', compact('daftar_kesuburan_tanah'));
    }

    public function create()
    {
        return view('kesuburan-tanah.create');
    }

    public function store(KesuburanTanahRequest $request)
    {
        KesuburanTanah::create($request->all());
        Session::flash('pesan', '1 Kesuburan Tanah Berhasil Disimpan');
        return redirect('kesuburan-tanah');
    }

    public function edit(KesuburanTanah $kesuburanTanah)
    {
        return view('kesuburan-tanah.edit', compact('kesuburanTanah'));
    }

    public function update(KesuburanTanahRequest $request, KesuburanTanah $kesuburanTanah)
    {
        $kesuburanTanah->update($request->all());
        Session::flash('pesan', '1 Kesuburan Tanah Berhasil Diupdate');
        return redirect('kesuburan-tanah');
    }

    public function destroy(KesuburanTanah $kesuburanTanah)
    {
        $kesuburanTanah->delete();
        Session::flash('pesan', '1 Kesuburan Tanah Berhasil Dihapus');
        return redirect('kesuburan-tanah');
    }
}
