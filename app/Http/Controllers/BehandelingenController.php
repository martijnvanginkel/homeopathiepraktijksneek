<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Behandelingen;
use File;

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

      if($request->hasFile('behandeling')){
        if(file_exists( public_path() . '/storage/behandelings/' . 'behandeling.jpg')) {
          
          File::Delete(public_path() . '/storage/behandelings/' . 'behandeling.jpg');
          $file = request()->file('behandeling');
          $file->storeAs('behandelings/', 'behandeling.jpg', 'public');

        }else{
          
          $file = request()->file('behandeling');
          $file->storeAs('behandelings/', 'behandeling.jpg', 'public');
          
        }
      }

      if($request->hasFile('behandeling2')){
        if(file_exists( public_path() . '/storage/behandelings/' . 'behandeling2.jpg')) {
          
          File::Delete(public_path() . '/storage/behandelings/' . 'behandeling2.jpg');
          $file = request()->file('behandeling2');
          $file->storeAs('behandelings/', 'behandeling2.jpg', 'public');

        }else{
          
          $file = request()->file('behandeling2');
          $file->storeAs('behandelings/', 'behandeling2.jpg', 'public');
          
        }
      }

      if($request->hasFile('behandeling3')){
        if(file_exists( public_path() . '/storage/behandelings/' . 'behandeling3.jpg')) {
          
          File::Delete(public_path() . '/storage/behandelings/' . 'behandeling3.jpg');
          $file = request()->file('behandeling3');
          $file->storeAs('behandelings/', 'behandeling3.jpg', 'public');

        }else{
          
          $file = request()->file('behandeling3');
          $file->storeAs('behandelings/', 'behandeling3.jpg', 'public');
          
        }
      }

      if($request->hasFile('behandeling4')){
        if(file_exists( public_path() . '/storage/behandelings/' . 'behandeling4.jpg')) {
          
          File::Delete(public_path() . '/storage/behandelings/' . 'behandeling4.jpg');
          $file = request()->file('behandeling4');
          $file->storeAs('behandelings/', 'behandeling4.jpg', 'public');

        }else{
          
          $file = request()->file('behandeling4');
          $file->storeAs('behandelings/', 'behandeling4.jpg', 'public');
          
        }
      }

      if($request->hasFile('behandeling5')){
        if(file_exists( public_path() . '/storage/behandelings/' . 'behandeling5.jpg')) {
          
          File::Delete(public_path() . '/storage/behandelings/' . 'behandeling5.jpg');
          $file = request()->file('behandeling5');
          $file->storeAs('behandelings/', 'behandeling5.jpg', 'public');

        }else{
          
          $file = request()->file('behandeling5');
          $file->storeAs('behandelings/', 'behandeling5.jpg', 'public');
          
        }
      }

      return redirect()->route('behandelingen.edit', $behandelingen->id);
    }

}
