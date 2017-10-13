<?php

namespace App\Repositories;

use App\Customer;

class CustomerRepository
{

    public function readAll()
    {
        return Customer::all();
    }
}