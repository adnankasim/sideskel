<?php

namespace App\Http\Controllers;

use App\Orbitasi;
use Illuminate\Http\Request;
use App\Http\Requests\OrbitasiRequest;
use Session;

class OrbitasiController extends Controller
{
    public function index()
    {
        return view('orbitasi.index');
    }

    public function create()
    {
        return view('orbitasi.create');
    }

    public function store(OrbitasiRequest $request)
    {
        //
    }

    public function edit(Orbitasi $orbitasi)
    {
        return view('orbitasi.edit');
    }

    public function update(OrbitasiRequest $request, Orbitasi $orbitasi)
    {
        //
    }

    public function destroy(Orbitasi $orbitasi)
    {
        //
    }
}
