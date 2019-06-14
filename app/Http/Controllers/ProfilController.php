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
        return view('profil.index');
    }

    public function edit(Profil $profil)
    {
        return view('profil.edit');
    }

    public function update(ProfilRequest $request, Profil $profil)
    {
        //
    }

    public function destroy(Profil $profil)
    {
        //
    }
}
