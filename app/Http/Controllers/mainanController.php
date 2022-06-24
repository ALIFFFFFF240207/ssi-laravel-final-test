<?php

namespace App\Http\Controllers;

use App\Models\Mainan;
use Illuminate\Http\Request;

class mainanController extends Controller
{
    public function index()
    {
        $mainan = Mainan::all();
        return view('mainan.index', compact(['mainan']));
    }

    public function tambah()
    {
        return view('mainan.tambah');
    }

    public function store(request $request)
    {
        Mainan::create($request->except(['_token', 'submit']));
        return redirect('/mainan');
    }

    public function edit($id)
    {
        $mainan = Mainan::find($id);
        return view('mainan.edit', compact(['mainan']));
    }

    public function update($id, request $request)
    {
        $mainan = Mainan::find($id);
        $mainan->update($request->except(['_token', 'submit']));
        return redirect('/mainan');
    }
}
