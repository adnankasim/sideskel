<?php

namespace App\Http\Controllers;

use App\Iklim;
use Illuminate\Http\Request;
use App\Http\Requests\IklimRequest;
use Session;

class IklimController extends Controller
{
    public function index()
    {
        return view('iklim.index');
    }

    public function create()
    {
        return view('iklim.create');
    }

    public function store(IklimRequest $request)
    {
        //
    }

    public function edit(Iklim $iklim)
    {
        return view('iklim.edit');
    }

    public function update(IklimRequest $request, Iklim $iklim)
    {
        //
    }

    public function destroy(Iklim $iklim)
    {
        //
    }
}
