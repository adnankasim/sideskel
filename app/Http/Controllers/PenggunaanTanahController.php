<?php

namespace App\Http\Controllers;

use App\PenggunaanTanah;
use Illuminate\Http\Request;
use App\Http\Requests\PenggunaanTanahRequest;
use Session;

class PenggunaanTanahController extends Controller
{
    public function index()
    {
        return view('penggunaan-tanah.index');
    }

    public function create()
    {
        return view('penggunaan-tanah.create');
    }

    public function store(PenggunaanTanahRequest $request)
    {
        //
    }

    public function edit(PenggunaanTanah $penggunaanTanah)
    {
        return view('penggunaan-tanah.edit');
    }

    public function update(PenggunaanTanahRequest $request, PenggunaanTanah $penggunaanTanah)
    {
        //
    }

    public function destroy(PenggunaanTanah $penggunaanTanah)
    {
        //
    }
}
