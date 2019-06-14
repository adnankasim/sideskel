<?php

namespace App\Http\Controllers;

use App\Dokumen;
use Illuminate\Http\Request;
use App\Http\Requests\DokumenRequest;
use Session;

class DokumenController extends Controller
{
    public function index()
    {
        return view('dokumen.index');
    }

    public function create()
    {
        return view('dokumen.create');
    }

    public function store(DokumenRequest $request)
    {
        //
    }

    public function edit(Dokumen $dokumen)
    {
        return view('dokumen.edit');
    }

    public function update(DokumenRequest $request, Dokumen $dokumen)
    {
        //
    }

    public function destroy(Dokumen $dokumen)
    {
        //
    }
}
