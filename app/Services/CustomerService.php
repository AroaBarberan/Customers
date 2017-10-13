<?php

namespace App\Services;

use App\Customer;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;

class CustomerService
{
    private $repository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->repository = $customerRepository;
    }

    public function readAll(Request $request) {
        $customers = $this->repository->readAll();

        return $customers;
    }
}