<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        return view('admin.personal.index');
    }
    public function create()
    {
        return view('admin.personal.create', ['specialities' => Speciality::all()]);
    }
}
