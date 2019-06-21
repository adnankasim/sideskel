<?php

namespace App\Http\Controllers;

use App\Penduduk;
use Illuminate\Http\Request;
use App\Http\Requests\PendudukRequest;
use Session;

class PendudukController extends Controller
{
    public function index()
    {
        $daftar_penduduk = Penduduk::orderBy('id', 'desc')->paginate(25);
        return view('penduduk.index', compact('daftar_penduduk'));
    }

    public function create()
    {
        return view('penduduk.create');
    }

    public function store(PendudukRequest $request)
    {
        $input = $request->all();
        if($request->hasFile('foto_penduduk')){
          $input['foto_penduduk'] = $this->uploadFoto($request);
        }
        Penduduk::create($input);
        Session::flash('pesan', 'Penduduk Berhasil Ditambah');
        return redirect('penduduk');
    }

    public function show(Penduduk $penduduk)
    {
        return view('penduduk.detail', compact('penduduk'));
    }

    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit', compact('penduduk'));
    }

    public function update(PendudukRequest $request, Penduduk $penduduk)
    {
        $input = $request->all();
        if($request->hasFile('foto_penduduk')){
          $this->hapusFoto($penduduk);
          $input['foto_penduduk'] = $this->uploadFoto($request);
        }
        $penduduk->update($input);
        Session::flash('pesan', 'Penduduk Berhasil Diupdate');
        return redirect('penduduk');
    }

    public function destroy(Penduduk $penduduk)
    {
        $this->hapusFoto($penduduk);
        $penduduk->delete();
        Session::flash('pesan', '1 Penduduk Berhasil Dihapus');
        return redirect('penduduk');
    }

    public function cari(Request $request)
    {
      $nama_penduduk = trim($request->input('nama_penduduk'));
      $pekerjaan = trim($request->input('pekerjaan'));
      $jenis_kelamin = trim($request->input('jenis_kelamin'));
      $agama = trim($request->input('agama'));
      $golongan_darah = trim($request->input('golongan_darah'));

      if(!empty($nama_penduduk) || !empty($pekerjaan) || !empty($jenis_kelamin) || !empty($agama) || !empty($golongan_darah)){

          if(!empty($penduduk)){
            $query = Penduduk::where('nama_penduduk', 'like', '%' . $nama_penduduk . '%');
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($pekerjaan)){
            $query = Penduduk::Pekerjaan($pekerjaan);
            (!empty($penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($golongan_darah)){
            $query = Penduduk::GolonganDarah($golongan_darah);
            (!empty($penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($agama)){
            $query = Penduduk::Agama($agama);
            (!empty($penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($jenis_kelamin)){
            $query = Penduduk::JenisKelamin($jenis_kelamin);
            (!empty($penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
          }

          $daftar_penduduk = $query->paginate(25);

          $pagination = (!empty($penduduk)) ? $daftar_penduduk->appends(['nama_penduduk' => $penduduk]) : '';
          $pagination = (!empty($pekerjaan)) ? $daftar_penduduk->appends(['pekerjaan' => $pekerjaan]) : '';
          $pagination = (!empty($golongan_darah)) ? $daftar_penduduk->appends(['golongan_darah' => $golongan_darah]) : '';
          $pagination = (!empty($agama)) ? $daftar_penduduk->appends(['agama' => $agama]) : '';
          $pagination = (!empty($jenis_kelamin)) ? $daftar_penduduk->appends(['jenis_kelamin' => $jenis_kelamin]) : '';
          $pagination = $daftar_penduduk->appends($request->except('page'));

          return view('penduduk.index', compact('daftar_penduduk', 'nama_penduduk', 'pagination', 'pekerjaan', 'jenis_kelamin', 'agama', 'golongan_darah'));
        }
        return redirect('penduduk');

    }

    private function uploadFoto(PendudukRequest $request){
        $foto = $request->file('foto_penduduk');
        $ext = $foto->getClientOriginalExtension();

        if($request->file('foto_penduduk')->isValid()){
          $foto_name = date('YmdHis').".$ext";
          $upload_path = 'assets-dashboard/images';
          $request->file('foto_penduduk')->move($upload_path, $foto_name);

          return $foto_name;
        }

        return false;
      }

      private function hapusFoto(Penduduk $penduduk){
        $foto = 'assets-dashboard/images/'.$penduduk->foto_penduduk;
        if(file_exists($foto) && isset($penduduk->foto_penduduk)){
        $delete = unlink($foto);
          if($delete){
            return true;
          }
          return false;
        }
      }

}
