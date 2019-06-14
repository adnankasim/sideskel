<?php

namespace App\Http\Controllers;

use App\TanamanKomoditas;
use Illuminate\Http\Request;
use App\Http\Requests\TanamanKomoditasRequest;
use Session;

class TanamanKomoditasController extends Controller
{
    public function index()
    {
        return view('tanaman-komoditas.index');
    }

    public function create()
    {
        return view('tanaman-komoditas.create');
    }

    public function store(TanamanKomoditasRequest $request)
    {
        //
    }

    public function edit(TanamanKomoditas $tanamanKomoditas)
    {
        return view('tanaman-komoditas.edit');
    }

    public function update(TanamanKomoditasRequest $request, TanamanKomoditas $tanamanKomoditas)
    {
        //
    }

    public function destroy(TanamanKomoditas $tanamanKomoditas)
    {
        //
    }
}
