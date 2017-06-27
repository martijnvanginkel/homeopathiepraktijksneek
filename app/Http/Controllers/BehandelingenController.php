<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Behandelingen;

class BehandelingenController extends Controller
{

    public function edit()
    {
      $behandelingen = Behandelingen::first();

      return view('/behandelingen.edit')->with('behandelingen', $behandelingen);
    }


    public function update(Request $request)
    {
      $this->validate($request, array(
        'title' => 'required',
      ));

      $behandelingen = Behandelingen::first();

      $behandelingen->title = $request->title;
      $behandelingen->paragraphOne = $request->paragraphOne;

      $behandelingen->blockOneTitle = $request->blockOneTitle;
      $behandelingen->blockOneInfo = $request->blockOneInfo;
      $behandelingen->blockTwoTitle = $request->blockTwoTitle;
      $behandelingen->blockTwoInfo = $request->blockTwoInfo;
      $behandelingen->blockThreeTitle = $request->blockThreeTitle;
      $behandelingen->blockThreeInfo = $request->blockThreeInfo;
      $behandelingen->blockFourTitle = $request->blockFourTitle;
      $behandelingen->blockFourInfo = $request->blockFourInfo;

      $behandelingen->save();

      return redirect()->route('behandelingen.edit', $behandelingen->id);
    }

}
