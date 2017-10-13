<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    private $service;

    public function __construct(CustomerService $customerService)
    {
        $this->service = $customerService;
    }

    public function index(Request $request){
        $customers = $this->service->readAll($request);

        return view('customer.index', ['customers' => $customers]);
    }
}
