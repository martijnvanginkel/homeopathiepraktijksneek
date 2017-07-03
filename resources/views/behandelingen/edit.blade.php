@extends('back')

@section('content')

<form method="POST" action="{{ route('behandelingen.update', $behandelingen->id) }}" enctype="multipart/form-data">

    <div class="fieldBox">
      <label name="behandeling">Banner</label>
      <input type="file" name="behandeling" accept="behandeling"/>
    </div>
    
    <div class="fieldBox">
      <label name="behandeling2">Blok 1</label>
      <input type="file" name="behandeling2" accept="behandeling2"/>
    </div>
    
    <div class="fieldBox">
      <label name="behandeling3">Blok 2</label>
      <input type="file" name="behandeling3" accept="behandeling3"/>
    </div>
    
    <div class="fieldBox">
      <label name="behandeling4">Blok 3</label>
      <input type="file" name="behandeling4" accept="behandeling4"/>
    </div>

    <div class="fieldBox">
      <label name="behandeling5">Blok 4</label>
      <input type="file" name="behandeling5" accept="behandeling5"/>
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
