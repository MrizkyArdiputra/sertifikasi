<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use Illuminate\Http\Request;

class SkemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skemas = Skema::all();
        return view('skema.index',compact('skemas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skema.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'kd_skema' => 'required|unique:skemas',
        'nm_skema' => 'required',
        'jenis' => 'required',
        'jml_unit' => 'required|integer|min:1',
    ]);

    try {
        Skema::create([
            'kd_skema' => $request->input('kd_skema'),
            'nm_skema' => $request->input('nm_skema'),
            'jenis' => $request->input('jenis'),
            'jml_unit' => $request->input('jml_unit'),
        ]);

        return redirect()->route('skema.index')->with('success', 'Data skema berhasil ditambahkan.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(Skema $skema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kd_skema)
    {
        $skema = Skema::find($kd_skema);

        if ($skema) {
            return view('skema.edit', compact('skema'));
        } else {
            return redirect()->route('skema.index')->with('error', 'Skema tidak ditemukan.');
        }
    }

    public function update(Request $request, $kd_skema)
    {
        $request->validate([
            'nm_skema' => 'required',
            'jenis' => 'required',
            'jml_unit' => 'required|integer|min:1',
        ]);

        try {
            $skema = Skema::find($kd_skema);

            if ($skema) {
                $skema->update([
                    'nm_skema' => $request->input('nm_skema'),
                    'jenis' => $request->input('jenis'),
                    'jml_unit' => $request->input('jml_unit'),
                ]);

                return redirect()->route('skema.index')->with('success', 'Data skema berhasil diperbarui.');
            } else {
                return redirect()->route('skema.index')->with('error', 'Skema tidak ditemukan.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }

    public function destroy($kd_skema)
    {
        try {
            $skema = Skema::find($kd_skema);

            if ($skema) {
                $skema->delete();
                return redirect()->route('skema.index')->with('success', 'Data skema berhasil dihapus.');
            } else {
                return redirect()->route('skema.index')->with('error', 'Skema tidak ditemukan.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }
}