<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeopathie;

class HomeopathieController extends Controller
{
  public function edit()
  {
    $homeopathie = Homeopathie::first();

    return view('/homeopathie.edit')->with('homeopathie', $homeopathie);
  }

  public function update(Request $request)
  {
    $this->validate($request, array(
      'title' => 'required',
    ));

    $homeopathie = Homeopathie::first();

    $homeopathie->title = $request->title;
    $homeopathie->paragraphOne = $request->paragraphOne;
    $homeopathie->photoText = $request->photoText;
    $homeopathie->paragraphTwo = $request->paragraphTwo;

    $homeopathie->save();

    return redirect()->route('homeopathie.edit', $homeopathie->id);
  }
}
