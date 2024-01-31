<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $data = Peserta::where('nm_peserta', 'like', '%' . $search . '%')->get();
        return view('peserta.index', compact('data', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skemas = Skema::all();
        return view('peserta.create',compact('skemas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'kd_skema' => 'required',
        'nm_peserta' => 'required',
        'jekel' => 'required|in:Laki-laki,Perempuan',
        'alamat' => 'required',
        'no_hp' => 'required',
    ]);

    try {
        Peserta::create([
            'kd_skema' => $request->input('kd_skema'),
            'nm_peserta' => $request->input('nm_peserta'),
            'jekel' => $request->input('jekel'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
        ]);

        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil ditambahkan.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        //
    }
}
