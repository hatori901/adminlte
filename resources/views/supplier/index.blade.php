@extends('adminlte::page')

@section('title', 'Data Supplier')

@section('content_header')
    <h1>Data Supplier</h1>
@stop

@section('content')
    <p>Halaman Data Supplier</p>
    <a href="{{ route('supplier.create') }}" class="btn btn-primary">Tambah Data Supplier</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Supplier</th>
                <th>Kode</th>
                <th>Kota</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->code }}</td>
                    <td>{{ $supplier->city }}</td>
                    <td>
                        <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('supplier.destroy', $supplier->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
