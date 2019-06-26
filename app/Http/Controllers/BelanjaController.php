<?php

namespace App\Http\Controllers;

use App\Belanja;
use Illuminate\Http\Request;
use App\Http\Requests\BelanjaRequest;
use Session;

class BelanjaController extends Controller
{
    public function index()
    {
        $daftar_tahun = Belanja::distinct('tahun')->pluck('tahun', 'tahun');
        $daftar_belanja = Belanja::orderBy('tahun', 'desc')->paginate(25);
        $update_terakhir = Belanja::orderBy('updated_at', 'desc')->first();
        return view('belanja.index', compact('daftar_belanja', 'daftar_tahun', 'update_terakhir'));
    }

    public function create()
    {
        return view('belanja.create');
    }

    public function store(BelanjaRequest $request)
    {
        Belanja::create($request->all());
        Session::flash('pesan', '1 Belanja Berhasil Disimpan');
        return redirect('belanja');
    }

    public function edit(Belanja $belanja)
    {
        return view('belanja.edit', compact('belanja'));
    }

    public function update(BelanjaRequest $request, Belanja $belanja)
    {
        $belanja->update($request->all());
        Session::flash('pesan', '1 Belanja Berhasil Diupdate');
        return redirect('belanja');
    }

    public function destroy(Belanja $belanja)
    {
        $belanja->delete();
        Session::flash('pesan', '1 Belanja Berhasil Dihapus');
        return redirect('belanja');
    }

    public function urutkan(Request $request)
    {
        if(empty($request->input('tahun'))) return redirect('belanja');

        $daftar_belanja = Belanja::where('tahun', $request->input('tahun'))->orderBy('nominal_belanja', 'asc')->get();
        $total = $daftar_belanja->sum('nominal_belanja');
        $daftar_tahun = Belanja::distinct('tahun')->pluck('tahun', 'tahun');
        $update_terakhir = Belanja::where('tahun', $request->input('tahun'))->orderBy('updated_at', 'desc')->first();
        return view('belanja.urutkan', compact('daftar_belanja', 'total', 'daftar_tahun', 'update_terakhir'));
    }
    
}
