@extends('main')

@section('content')

@include('partials._bannerphoto')


<div class="row">


  <div class="col-md-3 offset-1">
    <div class="contactInformation">
    <h1 class="contactHeader">Gegevens</h1>
      <ul>    
        <li>{{ $contact->name }}</li>
        <li>{{ $contact->address }}</li>
      </ul>
      <ul>
        <li>{{ $contact->email }}</li>
        <li>{{ $contact->phonenumber }}</li>
      </ul>
    </div>
  </div>
  <div class="col-md-7">
    <ul class="contactInput">
      <li><h1 class="contactHeader">Contactformulier</h1></li>
      <li><input type="text" name="naam" placeholder="Naam"></li>
      <li><input type="text" name="emailadres" placeholder="E-mailadres"></li>
      <li><textarea name="bericht" placeholder="Bericht" style="height:150px"></textarea></li>
      <li><a href="#"><div id="contactFormButton">Verzenden</div></a></li>
    </ul>
  </div>

</div>

<iframe id="googlemap" style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.939634229738!2d5.79676952434657!3d53.20482196078726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c8fe8715e07043%3A0xc039a47dd0d79b50!2sNieuweburen%2C+Leeuwarden!5e0!3m2!1snl!2snl!4v1498509913492" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


@include('partials._meerontdekken2')

@endsection
