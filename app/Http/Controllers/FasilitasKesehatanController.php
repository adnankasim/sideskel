<?php

namespace App\Http\Controllers;

use App\FasilitasKesehatan;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasKesehatanRequest;
use Session;

class FasilitasKesehatanController extends Controller
{
    public function index()
    {
        return view('fasilitas-kesehatan.index');
    }

    public function create()
    {
        return view('fasilitas-kesehatan.create');
    }

    public function store(FasilitasKesehatanRequest $request)
    {
        //
    }

    public function edit(FasilitasKesehatan $fasilitasKesehatan)
    {
        return view('fasilitas-kesehatan.edit');
    }

    public function update(FasilitasKesehatanRequest $request, FasilitasKesehatan $fasilitasKesehatan)
    {
        //
    }

    public function destroy(FasilitasKesehatan $fasilitasKesehatan)
    {
        //
    }
}
