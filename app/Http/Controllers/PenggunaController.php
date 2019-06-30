<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;
use App\Http\Requests\PenggunaRequest;
use Session;

class PenggunaController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function index()
    {
        $daftar_pengguna = Pengguna::paginate(25);
        $update_terakhir = Pengguna::orderBy('updated_at', 'desc')->first();
        return view('pengguna.index', compact('daftar_pengguna', 'update_terakhir'));
    }

    public function destroy(Pengguna $pengguna)
    {
        $pengguna->delete();
        Session::flash('pesan', '1 Pengguna Berhasil Dihapus');
        return redirect('pengguna');
    }
}
