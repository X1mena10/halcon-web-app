<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OrderController extends Controller
{
    public function getOwner()
    {
        return view('Owner', ["message" => Owner::getOwnerName()]);
    }
}