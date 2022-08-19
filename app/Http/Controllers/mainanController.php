<?php

namespace App\Http\Controllers;

use App\Models\Mainan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mainanController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->query('cari');

        if (!empty($cari)) {
            $data = DB::table('mainan')
                ->where('nama_mainan', 'like', '%' . $cari . '%')
                ->orWhere('deskripsi_mainan', 'like', '%' . $cari . '%')
                ->paginate(10);
        } else {
            $data = DB::table('mainan')
                ->paginate(10);
        }

        return view('mainan.index')->with([
            'mainan' => $data,
            'cari' => $cari
        ]);
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

    public function destroy($id)
    {
        $mainan = Mainan::find($id);
        $mainan->delete();
        return redirect('/mainan');
    }

    public function cancel()
    {
        return redirect('/mainan');
    }
}
