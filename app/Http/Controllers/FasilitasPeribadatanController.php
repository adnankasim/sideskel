<?php

namespace App\Http\Controllers;

use App\FasilitasPeribadatan;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasPeribadatanRequest;
use Session;

class FasilitasPeribadatanController extends Controller
{
    public function index()
    {
        return view('fasilitas-peribadatan.index');
    }

    public function create()
    {
        return view('fasilitas-peribadatan.create');
    }

    public function store(FasilitasPeribadatanRequest $request)
    {
        //
    }

    public function edit(FasilitasPeribadatan $fasilitasPeribadatan)
    {
    return view('fasilitas-peribadatan.edit');
    }

    public function update(FasilitasPeribadatanRequest $request, FasilitasPeribadatan $fasilitasPeribadatan)
    {
        //
    }

    public function destroy(FasilitasPeribadatan $fasilitasPeribadatan)
    {
        //
    }
}
