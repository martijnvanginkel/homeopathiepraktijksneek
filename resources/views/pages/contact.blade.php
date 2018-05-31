@extends('main')

@section('content')

<div class="bannerPhotoBox">
    <img src="{{ URL::asset('storage/contacts/contact.jpg') }} " class="bannerPhoto" />
</div>

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
      <li><h1 class="contactHeader">{{ $contact->title }}</h1></li>
{{--       <li><input type="text" name="naam" placeholder="Naam"></li>
      <li><input type="text" name="emailadres" placeholder="E-mailadres"></li> --}}
      {{-- <li><textarea name="bericht" placeholder="Bericht" style="height:150px"></textarea></li> --}}


    <li><p>{!! nl2br(e($contact->times)) !!}</p></li>

{{--       <li><a href="#"><div id="contactFormButton">Verzenden</div></a></li> --}}
    </ul>
  </div>

</div>

<iframe id="googlemap" style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2399.523838031608!2d5.636843515437471!3d53.02892220614109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c8ee264efdd4c9%3A0xa37d511a3ed399c9!2sDe+Kemphaan+12%2C+8601+ZH+Sneek!5e0!3m2!1snl!2snl!4v1526999125405" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

{{-- <iframe id="googlemap" style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2398.5473581043466!2d5.658782251572926!3d53.04647187981881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c8f031fb5c3fbb%3A0x95fa2a3ee6f52348!2sSlufter+20%2C+8602+DA+Sneek!5e0!3m2!1snl!2snl!4v1499000523463" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}


@include('partials._meerontdekken2')

@endsection
