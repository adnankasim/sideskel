<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\Http\Requests\ArtikelRequest;
use Session;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel.index');
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(ArtikelRequest $request)
    {
        //
    }

    public function show(Artikel $artikel)
    {
        return view('artikel.detail');
    }

    public function edit(Artikel $artikel)
    {
        return view('artikel.edit');
    }

    public function update(ArtikelRequest $request, Artikel $artikel)
    {
        //
    }

    public function destroy(Artikel $artikel)
    {
        //
    }
}
