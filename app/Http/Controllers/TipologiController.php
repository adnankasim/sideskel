<?php

namespace App\Http\Controllers;

use App\Tipologi;
use Illuminate\Http\Request;
use App\Http\Requests\TipologiRequest;
use Session;

class TipologiController extends Controller
{
    public function index()
    {
        return view('tipologi.index');
    }

    public function create()
    {
        return view('tipologi.create');
    }

    public function store(TipologiRequest $request)
    {
        //
    }

    public function edit(Tipologi $tipologi)
    {
        return view('tipologi.edit');
    }

    public function update(TipologiRequest $request, Tipologi $tipologi)
    {
        //
    }

    public function destroy(Tipologi $tipologi)
    {
        //
    }
}
