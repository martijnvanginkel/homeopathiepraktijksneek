<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
  public function pageview()
  {
    return view('back.pageview');
  }

}
