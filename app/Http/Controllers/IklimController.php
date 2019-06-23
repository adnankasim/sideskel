<?php

namespace App\Http\Controllers;

use App\Iklim;
use Illuminate\Http\Request;
use App\Http\Requests\IklimRequest;
use Session;

class IklimController extends Controller
{
    public function index()
    {
        $daftar_iklim = Iklim::all();
        $update_terakhir = Iklim::orderBy('updated_at', 'desc')->first();
        return view('iklim.index', compact('daftar_iklim', 'update_terakhir'));
    }

    public function create()
    {
        return view('iklim.create');
    }

    public function store(IklimRequest $request)
    {
        Iklim::create($request->all());
        Session::flash('pesan', '1 Iklim Berhasil Disimpan');
        return redirect('iklim');
    }

    public function edit(Iklim $iklim)
    {
        return view('iklim.edit', compact('iklim'));
    }

    public function update(IklimRequest $request, Iklim $iklim)
    {
        $iklim->update($request->all());
        Session::flash('pesan', '1 Iklim Berhasil Diupdate');
        return redirect('iklim');
    }

    public function destroy(Iklim $iklim)
    {
        $iklim->delete();
        Session::flash('pesan', '1 Iklim Berhasil Dihapus');
        return redirect('iklim');
    }
}
