<?php

namespace App\Http\Controllers;

use App\Pemerintahan;
use Illuminate\Http\Request;
use App\Http\Requests\PemerintahanRequest;
use Session;

class PemerintahanController extends Controller
{
    public function index()
    {
        return view('pemerintahan.index');
    }

    public function create()
    {
        return view('pemerintahan.create');
    }

    public function store(PemerintahanRequest $request)
    {
        //
    }

    public function edit(Pemerintahan $pemerintahan)
    {
        return view('pemerintahan.edit');
    }

    public function update(PemerintahanRequest $request, Pemerintahan $pemerintahan)
    {
        //
    }

    public function destroy(Pemerintahan $pemerintahan)
    {
        //
    }
}
