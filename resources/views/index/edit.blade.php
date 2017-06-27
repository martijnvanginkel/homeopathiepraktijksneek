@extends('back')

@section('content')

<form method="POST" action="{{ route('index.update', $index->id) }}" enctype="multipart/form-data">

    <div class="fieldBox">
      <label name="image"></label>
      <input type="file" name="image" accept="image"/>
    </div>

    <div class="fieldBox">
      <div>
        <label name="title" class="label">Titel:</label>
        <input class="stringInput" name="title" value="{{$index->title}}" />
      </div>
    </div>

    <div class="fieldBox">
      <div>
        <label name="paragraphOne" class="label">Paragraaf 1:</label>
        <textarea class="textInput" name="paragraphOne" rows="10">{{$index->paragraphOne}}</textarea>
      </div>
    </div>

    <div class="fieldBox">
      <div>
        <label name="titleTwo" class="label">Titel 2:</label>
        <input class="stringInput" name="titleTwo" value="{{$index->titleTwo}}" />
      </div>
    </div>

    <div class="fieldBox">
      <div>
        <label name="paragraphTwo" class="label">Paragraaf 2:</label>
        <textarea class="textInput" name="paragraphTwo" rows="10">{{$index->paragraphTwo}}</textarea>
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
