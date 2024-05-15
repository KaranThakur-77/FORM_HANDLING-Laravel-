<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FORM_Request;

class FORM_Controller extends Controller
{
    public function index()
    {
        return view("layouts/contact");
    }
    public function store(FORM_Request $request)
    {
        return back()->with("success","Form submitted successfully");
    }
}
