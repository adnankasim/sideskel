<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;
use App\Http\Requests\ProfilRequest;
use Session;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::find(1);
        return view('profil.index', compact('profil'));
    }

    public function edit(Profil $profil)
    {
        return view('profil.edit');
    }

    public function update(ProfilRequest $request, Profil $profil)
    {
        $input = $request->all();
        
        if($request->hasFile('logo')){
          $this->hapusFoto($profil);
          $input['logo'] = $this->uploadFoto($request);
        }

        $profil->update($input);

        Session::flash('pesan', 'Profil Berhasil Diupdate');

        return redirect('profil');
    }

    private function uploadFoto(ProfilRequest $request){
        $foto = $request->file('logo');
        $ext = $foto->getClientOriginalExtension();

        if($request->file('logo')->isValid()){
          $foto_name = date('YmdHis').".$ext";
          $upload_path = 'assets-dashboard/images';
          $request->file('logo')->move($upload_path, $foto_name);

          return $foto_name;
        }

        return false;
      }

      private function hapusFoto(Profil $profil){
        $logo = 'assets-dashboard/images/'.$profil->logo;
        if(file_exists($logo) && isset($profil->logo)){
        $delete = unlink($logo);
          if($delete){
            return true;
          }
          return false;
        }
      }
}
