<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Services\ProductService;


class ProductController extends Controller
{
    private $service;

    public function __construct(ProductService $productService)
    {
        $this->service = $productService;
    }

    public function index()
    {
        $products = $this->service->readAll();

        return view('product.index', ['products' => $products]);
    }

    public function showSome($id)
    {
        $customer = Customer::find($id);
        $products = $customer->products;

//        $pros = $this->service->readAll();
//        $products = [];
//        foreach ($pros as $pro) {
//            if ($id == $pro->customer_id) {
//                $products[] = $pro;
//            }
//        }

        return view('product.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = $this->service->read($id);
        return view('product.show', ['product' => $product]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required'
        ]);
        $product = new Customer([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'price' => $request->input('price')
        ]);
        $this->service->save($product);
        return redirect()->route('product.index');

    }

    public function delete($id)
    {
        $this->service->delete($id);
        return redirect()->route('product.index');
    }
}
