<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function index()
    {
        return view('admin.speciality.index');
    }
    public function store(Request $request)
    {
        try {
            
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage(),
            ], 500);
        }
    }
}
