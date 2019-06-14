<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Requests\KegiatanRequest;
use Session;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('kegiatan.index');
    }

    public function create()
    {
        return view('kegiatan.create');
    }

    public function store(KegiatanRequest $request)
    {
        //
    }

    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatan.edit');
    }

    public function update(KegiatanRequest $request, Kegiatan $kegiatan)
    {
        //
    }

    public function destroy(Kegiatan $kegiatan)
    {
        //
    }
}
