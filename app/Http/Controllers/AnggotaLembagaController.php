<?php

namespace App\Http\Controllers;

use App\AnggotaLembaga;
use Illuminate\Http\Request;
use App\Http\Requests\AnggotaLembagaRequest;
use Session;

class AnggotaLembagaController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $daftar_anggota_lembaga = AnggotaLembaga::paginate(25);
        $update_terakhir = AnggotaLembaga::orderBy('updated_at', 'desc')->first();
        return view('anggota-lembaga.index', compact('daftar_anggota_lembaga', 'update_terakhir'));
    }

    public function create()
    {
        return view('anggota-lembaga.create');
    }

    public function store(AnggotaLembagaRequest $request)
    {
        $input = $request->all();
        if($request->hasFile('foto')){
          $input['foto'] = $this->uploadFoto($request);
        }
        AnggotaLembaga::create($input);
        Session::flash('pesan', 'Anggota Lembaga Berhasil Ditambah');
        return redirect('anggota-lembaga');
    }

    public function show(AnggotaLembaga $anggota_lembaga)
    {
        $lembaga = $anggota_lembaga;
        return view('anggota-lembaga.detail', compact('lembaga'));
    }

    public function edit(AnggotaLembaga $anggotaLembaga)
    {
        return view('anggota-lembaga.edit', compact('anggotaLembaga'));
    }

    public function update(AnggotaLembagaRequest $request, AnggotaLembaga $anggotaLembaga)
    {
        $input = $request->all();
        if($request->hasFile('foto')){
          $this->hapusFoto($anggotaLembaga);
          $input['foto'] = $this->uploadFoto($request);
        }
        $anggotaLembaga->update($input);
        Session::flash('pesan', 'Anggota Lembaga Berhasil Diupdate');
        return redirect('anggota-lembaga');
    }

    public function destroy(AnggotaLembaga $anggotaLembaga)
    {
        $this->hapusFoto($anggotaLembaga);
        $anggotaLembaga->delete();
        Session::flash('pesan', '1 Anggota Lembaga Berhasil Dihapus');
        return redirect('anggota-lembaga');
    }

    private function uploadFoto(AnggotaLembagaRequest $request){
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();

        if($request->file('foto')->isValid()){
          $foto_name = date('YmdHis').".$ext";
          $upload_path = 'assets-dashboard/images';
          $request->file('foto')->move($upload_path, $foto_name);
          return $foto_name;
        }
        return false;
      }

      private function hapusFoto(AnggotaLembaga $anggotaLembaga){
        $foto = 'assets-dashboard/images/'.$anggotaLembaga->foto;
        if(file_exists($foto) && isset($anggotaLembaga->foto)){
        $delete = unlink($foto);
          if($delete){
            return true;
          }
          return false;
        }
      }

}
