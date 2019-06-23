<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\Http\Requests\ArtikelRequest;
use Session;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index()
    {
        $daftar_artikel = Artikel::orderBy('id', 'desc')->paginate(25);
        $update_terakhir = Artikel::orderBy('updated_at', 'desc')->first();
        return view('artikel.index', compact('daftar_artikel', 'update_terakhir'));
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(ArtikelRequest $request)
    {
        $input = $request->all();
        $input['slug_artikel'] = Str::slug($input['judul_artikel'], '-');
        if($request->hasFile('gambar_artikel')){
          $input['gambar_artikel'] = $this->uploadGambar($request);
        }
        Artikel::create($input);
        Session::flash('pesan', 'Artikel Berhasil Ditambah');
        return redirect('artikel');
    }

    public function show(Artikel $artikel)
    {
        return view('artikel.detail', compact('artikel'));
    }

    public function edit(Artikel $artikel)
    {
        return view('artikel.edit', compact('artikel'));
    }

    public function update(ArtikelRequest $request, Artikel $artikel)
    {
        $input = $request->all();
        $input['slug_artikel'] = Str::slug($input['judul_artikel'], '-');
        if($request->hasFile('gambar_artikel')){
          $this->hapusGambar($artikel);
          $input['gambar_artikel'] = $this->uploadGambar($request);
        }
        $artikel->update($input);
        Session::flash('pesan', 'Artikel Berhasil Diupdate');
        return redirect('artikel');
    }

    public function destroy(Artikel $artikel)
    {
        $this->hapusGambar($artikel);
        $artikel->delete();
        Session::flash('pesan', '1 Artikel Berhasil Dihapus');
        return redirect('artikel');
    }

    public function cari(Request $request)
    {
      $judul_artikel = trim($request->input('judul_artikel'));
      if(!empty($judul_artikel)){
          $query = Artikel::where('judul_artikel', 'like', '%' . $judul_artikel . '%');
          $daftar_artikel = $query->paginate(25);
          $pagination = $daftar_artikel->appends($request->except('page'));
          $update_terakhir = Artikel::orderBy('updated_at', 'desc')->first();

          return view('artikel.index', compact('daftar_artikel', 'judul_artikel', 'pagination', 'update_terakhir'));
        }
        return redirect('artikel');

    }

    private function uploadGambar(ArtikelRequest $request){
        $gambar = $request->file('gambar_artikel');
        $ext = $gambar->getClientOriginalExtension();
        if($request->file('gambar_artikel')->isValid()){
          $gambar_name = date('YmdHis').".$ext";
          $upload_path = 'assets-dashboard/images';
          $request->file('gambar_artikel')->move($upload_path, $gambar_name);
          return $gambar_name;
        }
        return false;
      }

      private function hapusGambar(Artikel $artikel){
        $gambar = 'assets-dashboard/images/'.$artikel->gambar_artikel;
        if(file_exists($gambar) && isset($artikel->gambar_artikel)){
        $delete = unlink($gambar);
          if($delete){
            return true;
          }
          return false;
        }
      }

    public function validasi(Artikel $artikel)
    {
        $artikel->is_valid = 'ya';
        $artikel->save();
        Session::flash('pesan', '1 Artikel Berhasil Divalidasi');
        return redirect('artikel');
    }

}
