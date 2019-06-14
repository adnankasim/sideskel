<?php

namespace App\Http\Controllers;

use App\FasilitasPendidikan;
use Illuminate\Http\Request;
use App\Http\Requests\FasilitasPendidikanRequest;
use Session;

class FasilitasPendidikanController extends Controller
{
    public function index()
    {
        return view('fasilitas-pendidikan.index');
    }

    public function create()
    {
        return view('fasilitas-pendidikan.create');
    }

    public function store(FasilitasPendidikanRequest $request)
    {
        //
    }

    public function edit(FasilitasPendidikan $fasilitasPendidikan)
    {
        return view('fasilitas-pendidikan.edit');
    }

    public function update(FasilitasPendidikanRequest $request, FasilitasPendidikan $fasilitasPendidikan)
    {
        //
    }

    public function destroy(FasilitasPendidikan $fasilitasPendidikan)
    {
        //
    }
}
