@extends('adminlte::page')

@section('title', 'Edit Data Supplier')


@section('content_header')
    <h1>Edit Data Supplier</h1>

@stop

@section('content')
    <p>Halaman Edit Data Supplier</p>
    <form action="{{ route('supplier.update', $supplier->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Nama Supplier</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $supplier->name }}" placeholder="Masukkan Nama Supplier">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="code">Kode Supplier</label>
            <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" value="{{ $supplier->code }}" placeholder="Masukkan Kode Supplier">
            @error('code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="city">Kota Supplier</label>
            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ $supplier->city }}" placeholder="Masukkan Kota Supplier">
            @error('city')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@stop