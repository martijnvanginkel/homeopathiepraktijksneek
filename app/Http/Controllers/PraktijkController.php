<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Praktijk;

class PraktijkController extends Controller
{
  public function edit()
  {
    $praktijk = Praktijk::first();

    return view('/praktijk.edit')->with('praktijk', $praktijk);
  }

  public function update(Request $request)
  {
    $this->validate($request, array(
      'title' => 'required',
    ));

    $praktijk = Praktijk::first();

    $praktijk->title = $request->title;
    $praktijk->paragraphOne = $request->paragraphOne;
    $praktijk->photoText = $request->photoText;
    $praktijk->paragraphTwo = $request->paragraphTwo;

    $praktijk->save();

    return redirect()->route('praktijk.edit', $praktijk->id);
  }
}