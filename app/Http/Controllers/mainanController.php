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
}
