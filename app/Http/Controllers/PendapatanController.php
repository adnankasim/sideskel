<?php

namespace App\Http\Controllers;

use App\Pendapatan;
use Illuminate\Http\Request;
use App\Http\Requests\PendapatanRequest;
use Session;

class PendapatanController extends Controller
{
    public function index()
    {
        $daftar_tahun = Pendapatan::distinct('tahun')->pluck('tahun', 'tahun');
        $daftar_pendapatan = Pendapatan::orderBy('tahun', 'desc')->paginate(25);
        $update_terakhir = Pendapatan::orderBy('updated_at', 'desc')->first();
        return view('pendapatan.index', compact('daftar_pendapatan', 'daftar_tahun', 'update_terakhir'));
    }

    public function create()
    {
        return view('pendapatan.create');
    }

    public function store(PendapatanRequest $request)
    {
        Pendapatan::create($request->all());
        Session::flash('pesan', '1 Pendapatan Berhasil Disimpan');
        return redirect('pendapatan');
    }

    public function edit(Pendapatan $pendapatan)
    {
        return view('pendapatan.edit', compact('pendapatan'));
    }

    public function update(PendapatanRequest $request, Pendapatan $pendapatan)
    {
        $pendapatan->update($request->all());
        Session::flash('pesan', '1 Pendapatan Berhasil Diupdate');
        return redirect('pendapatan');
    }

    public function destroy(Pendapatan $pendapatan)
    {
        $pendapatan->delete();
        Session::flash('pesan', '1 Pendapatan Berhasil Dihapus');
        return redirect('pendapatan');
    }

    public function urutkan(Request $request)
    {
        $daftar_pendapatan = Pendapatan::where('tahun', $request->input('tahun'))->orderBy('nominal_pendapatan', 'asc')->get();
        $total = $daftar_pendapatan->sum('nominal_pendapatan');
        $daftar_tahun = Pendapatan::distinct('tahun')->pluck('tahun', 'tahun');
        $update_terakhir = Pendapatan::where('tahun', $request->input('tahun'))->orderBy('updated_at', 'desc')->first();
        return view('pendapatan.urutkan', compact('daftar_pendapatan', 'total', 'daftar_tahun', 'update_terakhir'));
    }
}
