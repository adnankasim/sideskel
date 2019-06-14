<?php

namespace App\Http\Controllers;

use App\FasilitasEkonomi;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasEkonomiRequest;
use Session;

class FasilitasEkonomiController extends Controller
{
    public function index()
    {
        return view('fasilitas-ekonomi.index');
    }

    public function create()
    {
        return view('fasilitas-ekonomi.create');
    }

    public function store(FasilitasEkonomiRequest $request)
    {
        //
    }

    public function edit(FasilitasEkonomi $fasilitasEkonomi)
    {
        return view('fasilitas-ekonomi.edit');
    }

    public function update(FasilitasEkonomiRequest $request, FasilitasEkonomi $fasilitasEkonomi)
    {
        //
    }

    public function destroy(FasilitasEkonomi $fasilitasEkonomi)
    {
        //
    }
}
