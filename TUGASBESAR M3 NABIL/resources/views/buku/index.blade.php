@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h3 class="fw-bold mb-1">Daftar Katalog Buku</h3>
            <p class="text-muted mb-0">Kelola master data buku, ISBN, penerbit, dan stok literatur digital.</p>
        </div>
        <div>
            <a href="{{ route('buku.create') }}" class="btn btn-primary px-4 py-2 rounded-3 shadow-sm fw-semibold">
                <i class="bi bi-plus-lg me-1"></i> Tambah Buku Baru
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card border-0 shadow-sm rounded-4 p-3">
        <!-- Form Pencarian -->
        <form action="{{ route('buku.index') }}" method="GET" class="mb-3 d-flex justify-content-end">
            <div class="input-group" style="max-width: 320px;">
                <input type="text" name="search" class="form-control bg-light border-end-0" placeholder="Cari judul / penulis..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary px-3">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>

        <!-- Tabel Data Buku -->
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>NO</th>
                        <th>JUDUL BUKU</th>
                        <th>ISBN</th>
                        <th>PENULIS</th>
                        <th>PENERBIT</th>
                        <th>TAHUN</th>
                        <th>KATEGORI</th>
                        <th>STOK</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bukus as $index => $buku)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td class="fw-semibold text-primary">{{ $buku->judul }}</td>
                        <td><span class="badge bg-light text-dark border">{{ $buku->isbn }}</span></td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ $buku->penerbit }}</td>
                        <td>{{ $buku->tahun }}</td>
                        <td><span class="badge bg-primary-subtle text-primary fw-medium px-2 py-1">{{ $buku->kategori }}</span></td>
                        <td><span class="fw-bold">{{ $buku->stok }}</span> pcs</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted py-5">
                            <i class="bi bi-inbox fs-1 d-block mb-2 text-secondary"></i>
                            Belum ada data buku yang ditemukan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection