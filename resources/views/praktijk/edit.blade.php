@extends('back')

@section('content')

<form method="POST" action="{{ route('praktijk.update', $praktijk->id) }}" enctype="multipart/form-data">

    <div class="fieldBox">
      <label name="praktijk">Banner</label>
      <input type="file" name="praktijk" accept="praktijk"/>
    </div>

    <div class="fieldBox">
      <label name="praktijk2">Foto</label>
      <input type="file" name="praktijk2" accept="praktijk2"/>
    </div>

    <div class="fieldBox">
      <div>
        <label name="title" class="label">Titel:</label>
        <input class="stringInput" name="title" value="{{$praktijk->title}}" />
      </div>
    </div>

    <div class="fieldBox">
      <div>
        <label name="paragraphOne" class="label">Paragraaf 1:</label>
        <textarea class="textInput" name="paragraphOne" rows="10">{{$praktijk->paragraphOne}}</textarea>
      </div>
    </div>

{{--     <div class="fieldBox">
      <div>
        <label name="photoText" class="label">Foto onderschrift:</label>
        <input class="stringInput" name="photoText" value="{{$praktijk->photoText}}" />
      </div>
    </div> --}}

    <div class="fieldBox">
      <div>
        <label name="paragraphTwo" class="label">Paragraaf 2:</label>
        <textarea class="textInput" name="paragraphTwo" rows="10">{{$praktijk->paragraphTwo}}</textarea>
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
