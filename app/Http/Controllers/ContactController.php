<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use File;

class ContactController extends Controller
{
  public function edit()
  {
    $contact = Contact::first();

    return view('/contact.edit')->with('contact', $contact);
  }

  public function update(Request $request)
  {
    $this->validate($request, array(
      'name' => 'required',
    ));

    $contact = Contact::first();

    $contact->name = $request->name;
    $contact->address = $request->address;
    $contact->email = $request->email;
    $contact->phonenumber = $request->phonenumber;
    $contact->title = $request->title;
    $contact->times = $request->times;

    $contact->save();

    if($request->hasFile('contact')){
      if(file_exists( public_path() . '/storage/contacts/' . 'contact.jpg')) {
        
        File::Delete(public_path() . '/storage/contacts/' . 'contact.jpg');
        $file = request()->file('contact');
        $file->storeAs('contacts/', 'contact.jpg', 'public');
        

      }else{
        
        $file = request()->file('contact');
        $file->storeAs('contacts/', 'contact.jpg', 'public');
        
      }
    }

    return redirect()->route('contact.edit', $contact->id);
  }
}
