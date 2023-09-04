<?php

namespace App\Http\Controllers;

use App\Models\Delegation;
use Illuminate\Http\Request;

class DelegationController extends Controller
{
    public function showData()
    {
        $objects = Delegation::limit(6)->get();
        return view('delegacje', compact('objects'));
    }
}
