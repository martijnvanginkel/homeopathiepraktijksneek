<?php

namespace App\Http\Controllers;

use App\Index;
use App\Homeopathie;
use App\Behandelingen;
use App\Meerontdekken;
use App\Praktijk;
use App\Contact;

class PagesController extends Controller{

  public function getIndex()
  {
    $index = Index::first();

    return view('pages.index')->with('index', $index);
  }

  public function getHomeopathie()
  {
    $homeopathie = Homeopathie::first();

    return view('pages.homeopathie')->with('homeopathie', $homeopathie);
  }

  public function getBehandelingen()
  {
    $behandelingen = Behandelingen::first();
    $blockTextLength = 120;

    return view('pages.behandelingen',compact('behandelingen', 'blockTextLength'));
  }

  public function getPraktijk()
  {
    $praktijk = Praktijk::first();

    return view('pages.praktijk')->with('praktijk', $praktijk);
  }

  public function getKosten()
  {
    return view('pages.kosten');
  }

  public function getContact()
  {
    $contact = Contact::first();

    return view('pages.contact')->with('contact', $contact);
  }

  //behandelingen
  public function behandeling_1()
  {
    $behandelingen = Behandelingen::first();
    return view('behandeling.behandeling_1')->with('behandelingen', $behandelingen);
  }
  public function behandeling_2()
  {
    $behandelingen = Behandelingen::first();
    return view('behandeling.behandeling_2')->with('behandelingen', $behandelingen);
  }
  public function behandeling_3()
  {
    $behandelingen = Behandelingen::first();
    return view('behandeling.behandeling_3')->with('behandelingen', $behandelingen);
  }

  public function behandeling_4()
  {
    $behandelingen = Behandelingen::first();
    return view('behandeling.behandeling_4')->with('behandelingen', $behandelingen);
  }

}
