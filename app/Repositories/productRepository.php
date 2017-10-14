<?php

namespace App\Repositories;


use App\Product;

class productRepository
{

    public function readAll()
    {
        return Product::all();
    }

    public function read($id)
    {
        return Product::all()->find($id);
    }

    public function save(Product $product)
    {
        $product->save();
    }

    public function delete($id)
    {
        $product = Product::all()->find($id);
        $product->delete();
    }
}