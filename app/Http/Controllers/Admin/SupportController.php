<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    protected $service;

    public function  __construct(SupportService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $supports = $this->service->getSupports(
            status: $request->get('status','p')
        );

        return view('admin.supports.index', compact('supports'));
    }
}
