<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index(){
        return view('admin.eleves.index');
    }

}
