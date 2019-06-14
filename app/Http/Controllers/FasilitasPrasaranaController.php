<?php

namespace App\Http\Controllers;

use App\FasilitasPrasarana;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasPrasaranaRequest;
use Session;

class FasilitasPrasaranaController extends Controller
{
    public function index()
    {
        return view('fasilitas-prasarana.index');
    }

    public function create()
    {
        return view('fasilitas-prasarana.create');
    }

    public function store(FasilitasPrasaranaRequest $request)
    {
        //
    }

    public function edit(FasilitasPrasarana $fasilitasPrasarana)
    {
        return view('fasilitas-prasarana.edit');
    }

    public function update(FasilitasPrasaranaRequest $request, FasilitasPrasarana $fasilitasPrasarana)
    {
        //
    }

    public function destroy(FasilitasPrasarana $fasilitasPrasarana)
    {
        //
    }
}
