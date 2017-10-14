<?php

namespace App\Repositories;

use App\Customer;

class CustomerRepository
{

    public function readAll()
    {
        return Customer::all();
    }

    public function read($id)
    {
        return Customer::all()->find($id);
    }

    public function save(Customer $customer)
    {
        $customer->save();
    }
}