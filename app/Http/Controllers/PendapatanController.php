<?php

namespace App\Http\Controllers;

use App\Pendapatan;
use Illuminate\Http\Request;
use App\Http\Requests\PendapatanRequest;
use Session;

class PendapatanController extends Controller
{
    public function index()
    {
        return view('pendapatan.index');
    }

    public function create()
    {
        return view('pendapatan.create');
    }

    public function store(PendapatanRequest $request)
    {
        //
    }

    public function edit(Pendapatan $pendapatan)
    {
        return view('pendapatan.edit');
    }

    public function update(PendapatanRequest $request, Pendapatan $pendapatan)
    {
        //
    }

    public function destroy(Pendapatan $pendapatan)
    {
        //
    }
}
