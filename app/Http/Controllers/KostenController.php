<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kosten;
use File;

class KostenController extends Controller
{
  public function edit()
  {
    $kosten = Kosten::first();

    return view('/kosten.edit')->with('kosten', $kosten);
  }

  public function update(Request $request)
  {
    $this->validate($request, array(
      'title' => 'required',
    ));

    $kosten = Kosten::first();

    $kosten->title = $request->title;
    $kosten->paragraph = $request->paragraph;

    $kosten->behandeling01 = $request->behandeling01;
    $kosten->duur01 = $request->duur01;
    $kosten->prijs01 = $request->prijs01;

    $kosten->behandeling02 = $request->behandeling02;
    $kosten->duur02 = $request->duur02;
    $kosten->prijs02 = $request->prijs02;

    $kosten->behandeling03 = $request->behandeling03;
    $kosten->duur03 = $request->duur03;
    $kosten->prijs03 = $request->prijs03;

    $kosten->behandeling04 = $request->behandeling04;
    $kosten->duur04 = $request->duur04;
    $kosten->prijs04 = $request->prijs04;

    $kosten->save();

    if($request->hasFile('kosten')){
      if(file_exists( public_path() . '/storage/kostens/' . 'kosten.jpg')) {
        
        File::Delete(public_path() . '/storage/kostens/' . 'kosten.jpg');
        $file = request()->file('kosten');
        $file->storeAs('kostens/', 'kosten.jpg', 'public');
        

      }else{
        
        $file = request()->file('kosten');
        $file->storeAs('kostens/', 'kosten.jpg', 'public');
        
      }
    }

    return redirect()->route('kosten.edit', $kosten->id);
  }
}
