<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceStoreRequest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index');
    }
    public function create()
    {
        return view('admin.service.create');
    }
    public function store(ServiceStoreRequest $request)
    {
        $data = $request->validated();
        dd($data);
    }
}
