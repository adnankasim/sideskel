<?php

namespace App\Http\Controllers;

use App\Lembaga;
use Illuminate\Http\Request;
use App\Http\Requests\LembagaRequest;
use Session;

class LembagaController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        $daftar_lembaga = Lembaga::paginate(25);
        $update_terakhir = Lembaga::orderBy('updated_at', 'desc')->first();
        return view('lembaga.index', compact('daftar_lembaga', 'update_terakhir'));
    }

    public function create()
    {
        return view('lembaga.create');
    }

    public function store(LembagaRequest $request)
    {
        $input = $request->all();
        if($request->hasFile('logo')){
          $input['logo'] = $this->uploadLogo($request);
        }
        Lembaga::create($input);
        Session::flash('pesan', 'Lembaga Berhasil Ditambah');
        return redirect('lembaga');
    }

    public function edit(Lembaga $lembaga)
    {
        return view('lembaga.edit', compact('lembaga'));
    }

    public function update(LembagaRequest $request, Lembaga $lembaga)
    {
        $input = $request->all();
        
        if($request->hasFile('logo')){
          $this->hapusLogo($lembaga);
          $input['logo'] = $this->uploadLogo($request);
        }

        $lembaga->update($input);

        Session::flash('pesan', 'Lembaga Berhasil Diupdate');

        return redirect('lembaga');
    }

    public function destroy(Lembaga $lembaga)
    {
        $this->hapusLogo($lembaga);
        $lembaga->delete();
        Session::flash('pesan', '1 Lembaga Berhasil Dihapus');
        return redirect('lembaga');
    }

    public function show(Lembaga $lembaga)
    {
        return view('lembaga.detail', compact('lembaga'));
    }

    private function uploadLogo(LembagaRequest $request){
        $logo = $request->file('logo');
        $ext = $logo->getClientOriginalExtension();

        if($request->file('logo')->isValid()){
          $logo_name = date('YmdHis').".$ext";
          $upload_path = 'assets-dashboard/images';
          $request->file('logo')->move($upload_path, $logo_name);

          return $logo_name;
        }

        return false;
      }

      private function hapusLogo(Lembaga $lembaga){
        $logo = 'assets-dashboard/images/'.$lembaga->logo;
        if(file_exists($logo) && isset($lembaga->logo)){
        $delete = unlink($logo);
          if($delete){
            return true;
          }
          return false;
        }
      }
}
