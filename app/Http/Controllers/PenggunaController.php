<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;
use App\Http\Requests\PenggunaRequest;
use Session;

class PenggunaController extends Controller
{
    public function index()
    {
        return view('pengguna.index');
    }

    public function create()
    {
        return view('pengguna.create');
    }

    public function store(PenggunaRequest $request)
    {
        //
    }

    public function edit(Pengguna $pengguna)
    {
        return view('pengguna.edit');
    }

    public function update(PenggunaRequest $request, Pengguna $pengguna)
    {
        //
    }

    public function destroy(Pengguna $pengguna)
    {
        //
    }
}
