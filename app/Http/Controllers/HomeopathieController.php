<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeopathie;
use File;

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

    if($request->hasFile('homeopathie')){
        if(file_exists( public_path() . '/storage/homeopathies/' . 'homeopathie.jpg')) {
          
          File::Delete(public_path() . '/storage/homeopathies/' . 'homeopathie.jpg');
          $file = request()->file('homeopathie');
          $file->storeAs('homeopathies/', 'homeopathie.jpg', 'public');

        }else{
          
          $file = request()->file('homeopathie'); 
          $file->storeAs('homeopathies/', 'homeopathie.jpg', 'public');
          
        }
      }

    if($request->hasFile('homeopathie2')){
        if(file_exists( public_path() . '/storage/homeopathies/' . 'homeopathie2.jpg')) {
          
          File::Delete(public_path() . '/storage/homeopathies/' . 'homeopathie2.jpg');
          $file = request()->file('homeopathie2');
          $file->storeAs('homeopathies/', 'homeopathie2.jpg', 'public');

        }else{
          
          $file = request()->file('homeopathie2'); 
          $file->storeAs('homeopathies/', 'homeopathie2.jpg', 'public');
          
        }
      }

    return redirect()->route('homeopathie.edit', $homeopathie->id);
  }
}
