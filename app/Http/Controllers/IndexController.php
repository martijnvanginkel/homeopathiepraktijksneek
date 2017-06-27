<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;

class IndexController extends Controller
{
    public function edit()
    {
      $index = Index::first();

      return view('/index.edit')->with('index', $index);
    }

    public function update(Request $request)
    {
      $this->validate($request, array(
        'title' => 'required',
      ));

      $index = Index::first();

      $index->title = $request->title;
      $index->paragraphOne = $request->paragraphOne;
      $index->titleTwo = $request->titleTwo;
      $index->paragraphTwo = $request->paragraphTwo;

      $index->save();

      return redirect()->route('index.edit', $index->id);
    }

}
