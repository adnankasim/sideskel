<?php

namespace App\Http\Controllers;

use App\InfraMelintasi;
use Illuminate\Http\Request;
use App\Http\Requests\InfraMelintasiRequest;
use Session;

class InfraMelintasiController extends Controller
{
    public function index()
    {
        return view('infrastruktur-melintasi.index');
    }

    public function create()
    {
        return view('infrastruktur-melintasi.index');
    }

    public function store(InfraMelintasiRequest $request)
    {
        //
    }

    public function edit(InfraMelintasi $infraMelintasi)
    {
        return view('infrastruktur-melintasi.edit');
    }

    public function update(InfraMelintasiRequest $request, InfraMelintasi $infraMelintasi)
    {
        //
    }

    public function destroy(InfraMelintasi $infraMelintasi)
    {
        //
    }
}
