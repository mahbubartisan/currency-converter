<?php

namespace App\Repositories;

use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;

class SupplierRepo
{

    public function getSupplier()
    {

        $data = [];
        $perPage = request()->perPage ?: 5;
        $data['suppliers'] = Supplier::query()->when(request()->search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })->paginate($perPage)->withQueryString();
        // $data['suppliers'] = Supplier::latest()->get();
        return $data;
    }

    public function save(SupplierRequest $request, Supplier $supplier = null)
    {

        $data = $request->validated();

        if ($request->id) {
            $supplier = Supplier::findOrFail($request->id);
            $supplier->update($data);
        } else {
            Supplier::create($data);
        }

        $action = $supplier ? 'updated' : 'created';
        return redirect()->back()->with("message", "Supplier $action Successfully");

    }

    public function destroy(Supplier $supplier)
    {

        $supplier->delete();
        return redirect()->back()->with("message", "Supplier deleted Successfully");

    }
}
