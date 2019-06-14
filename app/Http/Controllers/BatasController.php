<?php

namespace App\Http\Controllers;

use App\Batas;
use Illuminate\Http\Request;
use App\Http\Requests\BatasRequest;
use Session;

class BatasController extends Controller
{
    public function index()
    {
        return view('batas.index'); 
    }

    public function create()
    {
        return view('batas.create'); 
    }

    public function store(BatasRequest $request)
    {
        //
    }

    public function edit(Batas $batas)
    {
        return view('batas.edit'); 
    }

    public function update(BatasRequest $request, Batas $batas)
    {
        //
    }

    public function destroy(Batas $batas)
    {
        //
    }
}
