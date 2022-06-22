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
}
