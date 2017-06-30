@extends('back')

@section('content')

<form method="POST" action="{{ route('behandelingen.update', $behandelingen->id) }}">

    <div class="fieldBox">
      <label name="image"></label>
      <input type="file" name="image" accept="image"/>
    </div>

    <div class="fieldBox">
      <div>
        <label name="title" class="label">Titel:</label>
        <input class="stringInput" name="title" value="{{$behandelingen->title}}" />
      </div>
    </div>
    <div class="fieldBox">
      <div>
        <label name="paragraphOne" class="label">Paragraaf 1:</label>
        <textarea class="textInput" name="paragraphOne" rows="10">{{$behandelingen->paragraphOne}}</textarea>
      </div>
    </div>

    <!-- Block 1 -->
    <div class="fieldBox">
      <div>
        <label name="blockOneTitle" class="label">Box 1 titel:</label>
        <input class="stringInput" name="blockOneTitle" value="{{$behandelingen->blockOneTitle}}" />
      </div>
    </div>
    <div class="fieldBox">
      <div>
        <label name="blockOneInfo" class="label">Box 1 informatie:</label>
        <textarea class="textInput" name="blockOneInfo" rows="10">{{$behandelingen->blockOneInfo}}</textarea>
      </div>
    </div>

    <!-- Block 2 -->
    <div class="fieldBox">
      <div>
        <label name="blockTwoTitle" class="label">Box 2 titel:</label>
        <input class="stringInput" name="blockTwoTitle" value="{{$behandelingen->blockTwoTitle}}" />
      </div>
    </div>
    <div class="fieldBox">
      <div>
        <label name="blockTwoInfo" class="label">Box 2 informatie:</label>
        <textarea class="textInput" name="blockTwoInfo" rows="10">{{$behandelingen->blockTwoInfo}}</textarea>
      </div>
    </div>

    <!-- Block 3 -->
    <div class="fieldBox">
      <div>
        <label name="blockThreeTitle" class="label">Box 3 titel:</label>
        <input class="stringInput" name="blockThreeTitle" value="{{$behandelingen->blockThreeTitle}}" />
      </div>
    </div>
    <div class="fieldBox">
      <div>
        <label name="blockThreeInfo" class="label">Box 3 informatie:</label>
        <textarea class="textInput" name="blockThreeInfo" rows="10">{{$behandelingen->blockThreeInfo}}</textarea>
      </div>
    </div>

    <!-- Block 4 -->
    <div class="fieldBox">
      <div>
        <label name="blockFourTitle" class="label">Box 4 titel:</label>
        <input class="stringInput" name="blockFourTitle" value="{{$behandelingen->blockFourTitle}}" />
      </div>
    </div>
    <div class="fieldBox">
      <div>
        <label name="blockFourInfo" class="label">Box 4 informatie:</label>
        <textarea class="textInput" name="blockFourInfo" rows="10">{{$behandelingen->blockFourInfo}}</textarea>
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
