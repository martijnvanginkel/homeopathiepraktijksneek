<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

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

    $contact->save();

    return redirect()->route('contact.edit', $contact->id);
  }
}
