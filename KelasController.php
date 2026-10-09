<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Instruktur;
use App\Models\Peserta;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::with(['instruktur', 'peserta'])->get();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        $instruktur = Instruktur::all();
        $peserta = Peserta::all();
        return view('kelas.create', compact('instruktur', 'peserta'));
    }

    public function store(Request $request)
    {
        $kelas = Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'id_instruktur' => $request->id_instruktur,
        ]);

        // Simpan relasi peserta
        $kelas->peserta()->attach($request->id_peserta);

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kelas = Kelas::with('peserta')->findOrFail($id);
        $instruktur = Instruktur::all();
        $peserta = Peserta::all();
        return view('kelas.edit', compact('kelas', 'instruktur', 'peserta'));
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'nama_kelas' => $request->nama_kelas,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'id_instruktur' => $request->id_instruktur,
        ]);

        // Update relasi peserta
        $kelas->peserta()->sync($request->id_peserta);

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diperbarui!');
    }

    public function show($id)
    {
        $kelas = Kelas::with(['instruktur', 'peserta'])->findOrFail($id);
        return view('kelas.show', compact('kelas'));
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->peserta()->detach();
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus!');
    }
}
