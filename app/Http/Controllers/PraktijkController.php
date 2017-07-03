<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Praktijk;
use File;

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

    if($request->hasFile('praktijk')){
      if(file_exists( public_path() . '/storage/praktijks/' . 'praktijk.jpg')) {
        
        File::Delete(public_path() . '/storage/praktijks/' . 'praktijk.jpg');
        $file = request()->file('praktijk');
        $file->storeAs('praktijks/', 'praktijk.jpg', 'public');

      }else{
        
        $file = request()->file('praktijk'); 
        $file->storeAs('praktijks/', 'praktijk.jpg', 'public');
        
      }
    }


    if($request->hasFile('praktijk2')){
      if(file_exists( public_path() . '/storage/praktijks/' . 'praktijk2.jpg')) {
        
        File::Delete(public_path() . '/storage/praktijks/' . 'praktijk2.jpg');
        $file = request()->file('praktijk2');
        $file->storeAs('praktijks/', 'praktijk2.jpg', 'public');

      }else{
        
        $file = request()->file('praktijk2'); 
        $file->storeAs('praktijks/', 'praktijk2.jpg', 'public');
        
      }
    }

    return redirect()->route('praktijk.edit', $praktijk->id);
  }
}