<?php

namespace App\Http\Controllers;

use App\Dokumen;
use Illuminate\Http\Request;
use App\Http\Requests\DokumenRequest;
use Session;

class DokumenController extends Controller
{
    public function index()
    {
        $daftar_dokumen = Dokumen::orderBy('created_at', 'desc')->paginate(25);
        return view('dokumen.index', compact('daftar_dokumen'));
    }

    public function create()
    {
        return view('dokumen.create');
    }

    public function store(DokumenRequest $request)
    {
        $input = $request->all();
        if($request->hasFile('file')){
          $input['file'] = $this->uploadFile($request);
        }
        Dokumen::create($input);
        Session::flash('pesan', 'Dokumen Berhasil Ditambah');
        return redirect('dokumen');
    }

    public function edit(Dokumen $dokuman)
    {
        return view('dokumen.edit', compact('dokuman'));
    }

    public function update(DokumenRequest $request, Dokumen $dokuman)
    {
        $input = $request->all();
        if($request->hasFile('file')){
          $this->hapusFile($dokuman);
          $input['file'] = $this->uploadFile($request);
        }
        $dokuman->update($input);
        Session::flash('pesan', 'Dokumen Berhasil Diupdate');
        return redirect('dokumen');
    }

    public function destroy(Dokumen $dokuman)
    {
        $this->hapusFile($dokuman);
        $dokuman->delete();
        Session::flash('pesan', '1 Dokumen Berhasil Dihapus');
        return redirect('dokumen');
    }

    private function uploadFile(DokumenRequest $request){
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        if($request->file('file')->isValid()){
          $file_name = date('YmdHis').".$ext";
          $upload_path = 'assets-beranda/dokumen';
          $request->file('file')->move($upload_path, $file_name);
          return $file_name;
        }
        return false;
      }

      private function hapusFile(Dokumen $dokuman){
        $file = 'assets-beranda/dokumen/'.$dokuman->file;
        if(file_exists($file) && isset($dokuman->file)){
        $delete = unlink($file);
          if($delete){
            return true;
          }
          return false;
        }
      }

}
