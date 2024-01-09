<?php

namespace App\Repositories;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Traits\MediaTraits;
use Illuminate\Support\Str;

class ProductRepo
{
    use MediaTraits;

    public function getProduct()
    {
        $data = [];
        // $data['categories'] = Category::all();
        $data['products'] = Product::latest()->get();
        return $data;

    }
    public function save(ProductRequest $request, Product $product = null)
    {

        $data = $request->validated();
        $data['slug'] = Str::slug($request->name);
        $data['media_id'] = $request->media_id;
        $data['barcode'] = $request->barcode;
        // $data['alert_qty'] = $request->alert_qty;
        $data['reference_no'] = $request->reference_no;
        $data['warranty_days'] = $request->warranty_days;
        $data['guarantee_days'] = $request->guarantee_days;

        if ($request->hasFile('media')) {

            $opt = [
                'dir' => 'products',
            ];

            $res = $this->saveMedia($request->file('media'), $opt);
            if ($res->status) {
                $data['media_id'] = $res->id;
            }
        }

        if ($request->id) {
            $product = Product::findOrFail($request->id);
            $product->update($data);
        } else {

            Product::create($data);
        }

        $action = $product ? 'updated' : 'created';

        return redirect()->route('admin.products.index')->with("message", "Product $action Successfully");
    }

    public function destroy(Product $product)
    {
        $this->deleteMedia($product?->media_id);
        $product->delete();
        return redirect()->back()->with("message", "Product deleted Successfully");

    }
}
