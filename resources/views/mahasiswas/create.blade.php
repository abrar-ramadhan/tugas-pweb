@extends('mahasiswas.layouts.master')
@section('title', 'Tambah Mahasiswa')
@section('content')
    <form action="{{ route('mahasiswas.store') }}" method="POST">
        @csrf <!-- CSRF token is required in Laravel forms for security -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
            id="nama" name="nama" value="{{ old('nama') }}" >
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control @error('npm') is-invalid @enderror" 
            id="npm" name="npm" value="{{ old('npm') }}">
            @error('npm')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tingkat" class="form-label">Tingkat</label>
            <select id="tingkat" class="form-control @error('tingkat') is-invalid @enderror" name="tingkat">
                <option value="">Pilih Tingkat</option>
                <option value="1" {{ old('tingkat') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('tingkat') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('tingkat') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('tingkat') == '4' ? 'selected' : '' }}>4</option>
            </select>
            @error('tingkat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control @error('kelas') is-invalid @enderror" 
            id="kelas" name="kelas" value="{{ old('kelas') }}">
            @error('kelas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" 
            id="jurusan" name="jurusan" value="{{ old('jurusan') }}">
            @error('jurusan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Tambah Mahasiswa</button>
    </form>
@endsection