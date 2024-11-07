<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $data['suppliers'] = Supplier::orderBy('id', 'desc')->paginate(10);
        return view('supplier.index', $data);
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'city' => 'required',
        ], [
            'code.required' => 'Harap masukkan kode supplier',
            'name.required' => 'Harap masukkan nama supplier',
            'city.required' => 'Harap masukkan kota supplier',
        ]);

        Supplier::create($request->all());

        return redirect()->route('supplier.index')
            ->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['supplier'] = Supplier::find($id);
        
        return view('supplier.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'city' => 'required',
        ], [
            'code.required' => 'Harap masukkan kode supplier',
            'name.required' => 'Harap masukkan nama supplier',
            'city.required' => 'Harap masukkan kota supplier',
        ]);

        $supplier = Supplier::find($id);

        $supplier->update($request->all());
        
        return redirect()->route('supplier.index')
            ->with('success', 'Supplier berhasil diupdate.');
    }

    public function destroy($id)
    {
        Supplier::find($id)->delete();
        return redirect()->route('supplier.index')
            ->with('success', 'Supplier deleted successfully.');
    }
}