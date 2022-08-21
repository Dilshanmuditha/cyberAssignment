<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{

    public function create()
    {
       return view('components.create-product');
    }

    public function store()
    { 
        $attributes=request()->validate([
            
            'name'=> 'required',
            'thumbnail'=> 'required|image',
            'price'=> 'required',
            'status'=> 'required',

        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Product::create($attributes);
        return redirect('/dashboard');
    }

    public function show()
    {
        return view('products',[
            'products' => product::all(),
        ]);
    }

    public function modify()
    {
        return view('components.customize',[
            'products' => Product::all(),
        ]);
    }

    public function edit(Product $products)
    {
        return view('components.edit', [
            'products'=> $products,
        ]);
    }

    public function update(Product $products)
    {
        $attributes=request()->validate([
            
            'name'=> 'required',
            'thumbnail'=> 'image',
            'price'=> 'required',
            'status'=> 'required',

        ]);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $products->update($attributes);

        return redirect('/dashboard/modify')->with('success','Product Updated !');
    }

    public function destroy(Product $products)
    {
        $products->delete();
        
        return redirect('/dashboard/modify')->with('success','Product Updated !');

    }
}
