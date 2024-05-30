<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $departments = Department::orderBy('title')->get();

        return view('pages.index', compact('departments'));
    }
}
