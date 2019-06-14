<?php

namespace App\Http\Controllers;

use App\FasilitasPemerintahan;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasPemerintahanRequest;
use Session;

class FasilitasPemerintahanController extends Controller
{
    public function index()
    {
        return view('fasilitas-pemerintahan.index');
    }

    public function create()
    {
        return view('fasilitas-pemerintahan.create');
    }

    public function store(FasilitasPemerintahanRequest $request)
    {
        //
    }

    public function edit(FasilitasPemerintahan $fasilitasPemerintahan)
    {
        return view('fasilitas-pemerintahan.edit');
    }

    public function update(FasilitasPemerintahanRequest $request, FasilitasPemerintahan $fasilitasPemerintahan)
    {
        //
    }

    public function destroy(FasilitasPemerintahan $fasilitasPemerintahan)
    {
        //
    }
}
