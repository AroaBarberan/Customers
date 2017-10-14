<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $service;

    public function __construct(CustomerService $customerService)
    {
        $this->service = $customerService;
    }

    public function index(Request $request)
    {
        $customers = $this->service->readAll($request);

        return view('customer.index', ['customers' => $customers]);
    }

    public function show($id){
        $customer = $this->service->read($id);
        return view('customer.show', ['customer' => $customer]);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request) {

    }
}
