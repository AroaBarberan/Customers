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

    public function readAll(Request $request)
    {
        return $this->repository->readAll();
    }

    public function read($id)
    {
        return $this->repository->read($id);
    }

    public function save(Customer $customer)
    {
        $this->repository->save($customer);
    }
    public function delete($id){
        $this->repository->delete($id);
    }
}