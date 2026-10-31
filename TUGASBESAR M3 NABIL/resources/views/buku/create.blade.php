@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm border-0 p-4">
                <h4 class="mb-4 fw-bold">Tambah Buku Baru</h4>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('buku.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Judul Buku</label>
                        <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">ISBN</label>
                        <input type="text" name="isbn" class="form-control" value="{{ old('isbn') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Penulis / Pengarang</label>
                        <input type="text" name="penulis" class="form-control" value="{{ old('penulis') }}" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" value="{{ old('penerbit') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Tahun Terbit</label>
                            <input type="number" name="tahun" class="form-control" placeholder="Contoh: 2023" value="{{ old('tahun') }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Kategori Literatur</label>
                            <select name="kategori" class="form-select" required>
                                <option value="">Pilih Kategori</option>
                                <option value="Teknologi" {{ old('kategori') == 'Teknologi' ? 'selected' : '' }}>Teknologi</option>
                                <option value="Sains" {{ old('kategori') == 'Sains' ? 'selected' : '' }}>Sains</option>
                                <option value="Novel / Fiksi" {{ old('kategori') == 'Novel / Fiksi' ? 'selected' : '' }}>Novel / Fiksi</option>
                                <option value="Buku Pelajaran" {{ old('kategori') == 'Buku Pelajaran' ? 'selected' : '' }}>Buku Pelajaran</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Jumlah Stok</label>
                            <input type="number" name="stok" class="form-control" min="0" value="{{ old('stok') }}" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="{{ route('buku.index') }}" class="btn btn-light border">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Buku</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection