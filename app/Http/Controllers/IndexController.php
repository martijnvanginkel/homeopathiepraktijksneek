<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use File;

class IndexController extends Controller
{
    public function edit()
    {
      $index = Index::first();

      //str_replace("<br />", "", nl2br(e(Index::first())));

      return view('/index.edit')->with('index', $index);
    }

    public function update(Request $request)
    {
      $this->validate($request, array(
        'title' => 'required',
      ));

      $index = Index::first();

     // str_replace('<br />', PHP_EOL, $index);

      //$index = preg_replace("/\n(?:\n)+/",'</p><p>', $index)

      $index->title = $request->title;
      $index->bannerTitle = $request->bannerTitle;
      $index->bannerSubtitle = $request->bannerSubtitle;
      $index->paragraphOne = $request->paragraphOne;
      $index->titleTwo = $request->titleTwo;
      $index->paragraphTwo = $request->paragraphTwo;
      $index->footerTitle = $request->footerTitle;
      $index->footerText = $request->footerText;

      $index->save();

      if($request->hasFile('index')){
        if(file_exists( public_path() . '/storage/indexes/' . 'index.jpg')) {
          
          File::Delete(public_path() . '/storage/indexes/' . 'index.jpg');
          $file = request()->file('index');
          $file->storeAs('indexes/', 'index.jpg', 'public');

        }else{
          
          $file = request()->file('index'); 
          $file->storeAs('indexes/', 'index.jpg', 'public');
          
        }
      }


      if($request->hasFile('index2')){
        if(file_exists( public_path() . '/storage/indexes/' . 'index2.jpg')) {
          
          File::Delete(public_path() . '/storage/indexes/' . 'index2.jpg');
          $file = request()->file('index2');
          $file->storeAs('indexes/', 'index2.jpg', 'public');
          

        }else{
          
          $file = request()->file('index2');
          $file->storeAs('indexes/', 'index2.jpg', 'public');
          
        }
      }
      
      return redirect()->route('index.edit', $index->id);
    }

}
