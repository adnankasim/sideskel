<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Requests\KegiatanRequest;
use Session;
use Illuminate\Support\Str;

class KegiatanController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        $daftar_kegiatan = Kegiatan::orderBy('id', 'desc')->paginate(25);
        $update_terakhir = Kegiatan::orderBy('updated_at', 'desc')->first();
        return view('kegiatan.index', compact('daftar_kegiatan', 'update_terakhir'));
    }

    public function create()
    {
        return view('kegiatan.create');
    }

    public function store(KegiatanRequest $request)
    {
        $input = $request->all();
        $input['slug_kegiatan'] = Str::slug($input['nama_kegiatan'], '-');
        if($request->hasFile('poster_kegiatan')){
          $input['poster_kegiatan'] = $this->uploadPoster($request);
        }
        Kegiatan::create($input);
        Session::flash('pesan', 'Kegiatan Berhasil Ditambah');
        return redirect('kegiatan');
    }

    public function show(Kegiatan $kegiatan)
    {
        return view('kegiatan.detail', compact('kegiatan'));
    }

    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatan.edit', compact('kegiatan'));
    }

    public function update(KegiatanRequest $request, Kegiatan $kegiatan)
    {
        $input = $request->all();
        $input['slug_kegiatan'] = Str::slug($input['nama_kegiatan'], '-');
        if($request->hasFile('poster_kegiatan')){
          $this->hapusPoster($kegiatan);
          $input['poster_kegiatan'] = $this->uploadPoster($request);
        }
        $kegiatan->update($input);
        Session::flash('pesan', 'Kegiatan Berhasil Diupdate');
        return redirect('kegiatan');
    }

    public function destroy(Kegiatan $kegiatan)
    {
        $this->hapusPoster($kegiatan);
        $kegiatan->delete();
        Session::flash('pesan', '1 Kegiatan Berhasil Dihapus');
        return redirect('kegiatan');
    }

    public function cari(Request $request)
    {
      $nama_kegiatan = trim($request->input('nama_kegiatan'));
      if(!empty($nama_kegiatan)){
          $query = Kegiatan::where('nama_kegiatan', 'like', '%' . $nama_kegiatan . '%');
          $daftar_kegiatan = $query->paginate(25);
          $pagination = $daftar_kegiatan->appends($request->except('page'));
          $update_terakhir = Kegiatan::orderBy('updated_at', 'desc')->first();

          return view('kegiatan.index', compact('daftar_kegiatan', 'nama_kegiatan', 'pagination', 'update_terakhir'));
        }
        return redirect('kegiatan');
    }

    private function uploadPoster(KegiatanRequest $request){
      $poster = $request->file('poster_kegiatan');
      $ext = $poster->getClientOriginalExtension();
      if($request->file('poster_kegiatan')->isValid()){
        $poster_name = date('YmdHis').".$ext";
        $upload_path = 'assets-dashboard/images';
        $request->file('poster_kegiatan')->move($upload_path, $poster_name);
        return $poster_name;
      }
      return false;
    }

    private function hapusPoster(Kegiatan $kegiatan){
      $poster = 'assets-dashboard/images/'.$kegiatan->poster_kegiatan;
      if(file_exists($poster) && isset($kegiatan->poster_kegiatan)){
      $delete = unlink($poster);
        if($delete){
          return true;
        }
        return false;
      }
    }

}
