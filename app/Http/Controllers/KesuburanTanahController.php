<?php

namespace App\Http\Controllers;

use App\KesuburanTanah;
use Illuminate\Http\Request;
use App\Http\Requests\KesuburanTanahRequest;
use Session;

class KesuburanTanahController extends Controller
{
    public function index()
    {
        return view('kesuburan-tanah.index');
    }

    public function create()
    {
        return view('kesuburan-tanah.create');
    }

    public function store(KesuburanTanahRequest $request)
    {
        //
    }

    public function edit(KesuburanTanah $kesuburanTanah)
    {
        return view('kesuburan-tanah.edit');
    }

    public function update(KesuburanTanahRequest $request, KesuburanTanah $kesuburanTanah)
    {
        //
    }

    public function destroy(KesuburanTanah $kesuburanTanah)
    {
        //
    }
}
