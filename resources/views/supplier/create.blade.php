@extends('adminlte::page')

@section('title', 'Tambah Data Supplier')

@section('content_header')
    <h1>Tambah Data Supplier</h1>
@stop

@section('content')
    <p>Halaman Tambah Data Supplier</p>
    <form action="{{ route('supplier.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nama Supplier</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Masukkan Nama Supplier">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="code">Kode Supplier</label>
            <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" value="{{ old('code') }}" placeholder="Masukkan Kode Supplier">
            @error('code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="city">Kota Supplier</label>
            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" placeholder="Masukkan Kota Supplier">
            @error('city')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@stop