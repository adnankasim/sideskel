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
        return Penduduk::all();
    }

    public function create()
    {
        //
    }

    public function store(PendudukRequest $request)
    {
        //
    }

    public function show(Penduduk $penduduk)
    {
        //
    }

    public function edit(Penduduk $penduduk)
    {
        //
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
