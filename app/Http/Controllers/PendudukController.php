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
        return view('penduduk.index');
    }

    public function create()
    {
        return view('penduduk.create');
    }

    public function store(PendudukRequest $request)
    {
        //
    }

    public function show(Penduduk $penduduk)
    {
        return view('penduduk.detail');
    }

    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit');
    }

    public function update(PendudukRequest $request, Penduduk $penduduk)
    {
        //
    }

    public function destroy(Penduduk $penduduk)
    {
        //
    }
}
