@extends('back')

@section('content')

<form method="POST" action="{{ route('contact.update', $contact->id) }}">

    <div class="fieldBox">
      <div>
        <label name="name" class="label">Naam:</label>
        <input class="stringInput" name="name" value="{{$contact->name}}" />
      </div>
    </div>

    <div class="fieldBox">
      <div>
        <label name="address" class="label">Adres:</label>
        <input class="stringInput" name="address" value="{{$contact->address}}" />
      </div>
    </div>
    
    <div class="fieldBox">
      <div>
        <label name="email" class="label">Email:</label>
        <input class="stringInput" name="email" value="{{$contact->email}}" />
      </div>
    </div>

    <div class="fieldBox">
      <div>
        <label name="phonenumber" class="label">Telefoonnummer:</label>
        <input class="stringInput" name="phonenumber" value="{{$contact->phonenumber}}" />
      </div>
    </div>


    <div class="fieldBox">
      <div>
        <input type="submit" value="Opslaan" class="editButton">

        <input type="hidden" name="_token" value="{{ Session::token() }}">
        {{ method_field('PUT') }}
      </div>
    </div>

</form>

@endsection
