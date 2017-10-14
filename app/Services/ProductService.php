<?php

namespace App\Services;


use App\Product;
use Illuminate\Foundation\ProviderRepository;
use App\Repositories\ProductRepository;


class ProductService
{
    private $repository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->repository = $productRepository;
    }

    public function readAll()
    {
        return $this->repository->readAll();
    }

    public function read($id)
    {
        return $this->repository->read($id);
    }

    public function save(Product $product)
    {
        $this->repository->save($product);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
    }
}