<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller {
    public function index(Request $request) {
        $search = $request->input('search');
        $bukus = Buku::when($search, function ($query, $search) {
            return $query->where('judul', 'like', "%{$search}%")
                         ->orWhere('penulis', 'like', "%{$search}%");
        })->get();
        return view('buku.index', compact('bukus'));
    }

    public function create() {
        return view('buku.create');
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isbn' => 'required|string|unique:bukus,isbn',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun' => 'required|digits:4',
            'kategori' => 'required|string',
            'stok' => 'required|integer|min:0',
        ]);

        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success', 'Data buku berhasil ditambahkan!');
    }
}
