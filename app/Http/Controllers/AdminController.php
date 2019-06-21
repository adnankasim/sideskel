<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Admin;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        $daftar_admin = Admin::paginate(25);
        return view('admin.index', compact('daftar_admin'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(AdminRequest $request)
    {
        $input = $request->all();
        $input['password_admin'] = bcrypt($request->input('password_admin'));
        Admin::create($input);
        Session::flash('pesan', '1 Admin Berhasil Disimpan');
        return redirect('admin');
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(AdminRequest $request, Admin $admin)
    {
        $input = $request->all();
        if($request->has('password_admin')){
            $input['password_admin'] = bcrypt($request->input('password_admin'));
        }
        $admin->update($input);
        Session::flash('pesan', '1 Admin Berhasil Diupdate');
        return redirect('admin');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        Session::flash('pesan', '1 Admin Berhasil Dihapus');
        return redirect('admin');
    }
}
