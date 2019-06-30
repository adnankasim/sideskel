<?php

namespace App\Http\Controllers;

use App\Pemerintahan;
use Illuminate\Http\Request;
use App\Http\Requests\PemerintahanRequest;
use Session;

class PemerintahanController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        $daftar_pemerintahan = Pemerintahan::paginate(25);
        $update_terakhir = Pemerintahan::orderBy('updated_at', 'desc')->first();
        return view('pemerintahan.index', compact('daftar_pemerintahan', 'update_terakhir'));
    }

    public function create()
    {
        return view('pemerintahan.create');
    }

    public function store(PemerintahanRequest $request)
    {
        $input = $request->all();
        if($request->hasFile('foto_pemerintahan')){
          $input['foto_pemerintahan'] = $this->uploadFoto($request);
        }
        Pemerintahan::create($input);
        Session::flash('pesan', 'Pemerintahan Berhasil Ditambah');
        return redirect('pemerintahan');
    }

    public function edit(Pemerintahan $pemerintahan)
    {
        return view('pemerintahan.edit', compact('pemerintahan'));
    }

    public function update(PemerintahanRequest $request, Pemerintahan $pemerintahan)
    {
        $input = $request->all();
        
        if($request->hasFile('foto_pemerintahan')){
          $this->hapusFoto($pemerintahan);
          $input['foto_pemerintahan'] = $this->uploadFoto($request);
        }

        $pemerintahan->update($input);

        Session::flash('pesan', 'Pemerintahan Berhasil Diupdate');

        return redirect('pemerintahan');
    }

    public function destroy(Pemerintahan $pemerintahan)
    {
        $this->hapusFoto($pemerintahan);
        $pemerintahan->delete();
        Session::flash('pesan', '1 Pemerintahan Berhasil Dihapus');
        return redirect('pemerintahan');
    }

    private function uploadFoto(PemerintahanRequest $request){
        $foto = $request->file('foto_pemerintahan');
        $ext = $foto->getClientOriginalExtension();

        if($request->file('foto_pemerintahan')->isValid()){
          $foto_name = date('YmdHis').".$ext";
          $upload_path = 'assets-dashboard/images';
          $request->file('foto_pemerintahan')->move($upload_path, $foto_name);

          return $foto_name;
        }

        return false;
      }

      private function hapusFoto(Pemerintahan $pemerintahan){
        $foto = 'assets-dashboard/images/'.$pemerintahan->foto_pemerintahan;
        if(file_exists($foto) && isset($pemerintahan->foto_pemerintahan)){
        $delete = unlink($foto);
          if($delete){
            return true;
          }
          return false;
        }
      }
}
