<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepenseController extends Controller
{
    public function index(){
        return view('admin.depenses.index');
    }
}
