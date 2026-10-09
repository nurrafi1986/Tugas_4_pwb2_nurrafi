<?php

namespace App\Http\Controllers;

use App\Models\Instruktur;
use Illuminate\Http\Request;

class InstrukturController extends Controller
{
    public function index()
    {
        $instruktur = Instruktur::all();
        return view('instruktur.index', compact('instruktur'));
    }

    public function create()
    {
        return view('instruktur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:instruktur,email',
            'no_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
            'bidang_keahlian' => 'nullable|string|max:100',
        ]);

        Instruktur::create($request->all());
        return redirect()->route('instruktur.index')->with('success', 'Instruktur berhasil ditambahkan!');
    }

    public function edit(Instruktur $instruktur)
    {
        return view('instruktur.edit', compact('instruktur'));
    }

    public function update(Request $request, Instruktur $instruktur)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:instruktur,email,' . $instruktur->id_instruktur,
            'no_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
            'bidang_keahlian' => 'nullable|string|max:100',
        ]);

        $instruktur->update($request->all());
        return redirect()->route('instruktur.index')->with('success', 'Instruktur berhasil diperbarui!');
    }

    public function destroy(Instruktur $instruktur)
    {
        $instruktur->delete();
        return redirect()->route('instruktur.index')->with('success', 'Instruktur berhasil dihapus!');
    }
}
