@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Tambah institution</h3>

        <a href="{{ route('institution.index') }}" class="btn btn-sm btn-secondary mb-2">Kembali</a>

        <form action="{{ route('institution.store') }}" method="POST">
            @csrf

            <div class="form-group mb-2">
                <label for="nama" class="form-label">Nama institution  <span class="text-danger">*</span></label>
                <input type="text" name="nama" id="nama" value="{{ old('nis') }}" class="form-control @error('nis') is-invalid @enderror" /> 

                @error('nama')
                    <div class="invalid-feedback d-blok">{{ $message }}</div>
                @enderror

            </div>
            
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
            <a href="{{ route('institution.index') }}" class="btn btn-secondary mb-3">Batal</a>
        </form>
    </div>
@endsection