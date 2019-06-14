<?php

namespace App\Http\Controllers;

use App\Belanja;
use Illuminate\Http\Request;
use App\Http\Requests\BelanjaRequest;
use Session;

class BelanjaController extends Controller
{
    public function index()
    {
        return view('belanja.index');
    }

    public function create()
    {
        return view('belanja.create');
    }

    public function store(BelanjaRequest $request)
    {
        //
    }

    public function edit(Belanja $belanja)
    {
        return view('belanja.edit');
    }

    public function update(BelanjaRequest $request, Belanja $belanja)
    {
        //
    }

    public function destroy(Belanja $belanja)
    {
        //
    }
}
