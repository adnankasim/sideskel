<?php

namespace App\Http\Controllers;

use App\FasilitasPemukiman;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasPemukimanRequest;
use Session;

class FasilitasPemukimanController extends Controller
{
    public function index()
    {
        return view('fasilitas-pemukiman.index');
    }

    public function create()
    {
        return view('fasilitas-pemukiman.create');
    }

    public function store(FasilitasPemukimanRequest $request)
    {
        //
    }

    public function edit(FasilitasPemukiman $fasilitasPemukiman)
    {
        return view('fasilitas-pemukiman.edit');
    }

    public function update(FasilitasPemukimanRequest $request, FasilitasPemukiman $fasilitasPemukiman)
    {
        //
    }

    public function destroy(FasilitasPemukiman $fasilitasPemukiman)
    {
        //
    }
}
