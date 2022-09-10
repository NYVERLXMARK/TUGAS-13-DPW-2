<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    function showHome()
  {
    return view('ecommerce.base');
  }
}