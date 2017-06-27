@extends('back')

@section('content')

<form method="POST" action="{{ route('homeopathie.update', $homeopathie->id) }}">

    <div class="fieldBox">
      <div>
        <label name="title" class="label">Titel:</label>
        <input class="stringInput" name="title" value="{{$homeopathie->title}}" />
      </div>
    </div>

    <div class="fieldBox">
      <div>
        <label name="paragraphOne" class="label">Paragraaf 1:</label>
        <textarea class="textInput" name="paragraphOne" rows="10">{{$homeopathie->paragraphOne}}</textarea>
      </div>
    </div>

    <div class="fieldBox">
      <div>
        <label name="photoText" class="label">Foto onderschrift:</label>
        <input class="stringInput" name="photoText" value="{{$homeopathie->photoText}}" />
      </div>
    </div>

    <div class="fieldBox">
      <div>
        <label name="paragraphTwo" class="label">Paragraaf 2:</label>
        <textarea class="textInput" name="paragraphTwo" rows="10">{{$homeopathie->paragraphTwo}}</textarea>
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
