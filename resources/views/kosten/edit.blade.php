@extends('back')

@section('content')

<style>
  .fieldbox3{
    width:33%;
    float:left;
  }
</style>

<form method="POST" action="{{ route('kosten.update', $kosten->id) }}" enctype="multipart/form-data">

    <div class="fieldBox">
      <label name="kosten"></label>
      <input type="file" name="kosten" accept="kosten"/>
    </div>

    <div class="fieldBox">
      <div>
        <label name="title" class="label">Titel:</label>
        <input class="stringInput" name="title" value="{{$kosten->title}}" />
      </div>
    </div>

    <div class="fieldBox">
      <div>
        <label name="paragraph" class="label">Paragraaf:</label>
        <textarea class="textInput" name="paragraph" rows="10">{!! str_replace("<br />", "", nl2br(e($kosten->paragraph))) !!}</textarea>
      </div>
    </div>

    <div class="fieldbox">
      
      <!-- behandeling 1 -->
      <div class="fieldbox3">
        <label name="behandeling01" class="label">Behandeling:</label>
        <input class="stringInput" name="behandeling01" value="{{$kosten->behandeling01}}" />
      </div>

      <div class="fieldbox3">
        <label name="duur01" class="label">Duur:</label>
        <input class="stringInput" name="duur01" value="{{$kosten->duur01}}" />
      </div>

      <div class="fieldbox3">
        <label name="prijs01" class="label">Prijs:</label>
        <input class="stringInput" name="prijs01" value="{{$kosten->prijs01}}" />
      </div>

       <!-- behandeling 2 -->
      <div class="fieldbox3">
        <label name="behandeling02" class="label"></label>
        <input class="stringInput" name="behandeling02" value="{{$kosten->behandeling02}}" />
      </div>

      <div class="fieldbox3">
        <label name="duur02" class="label"></label>
        <input class="stringInput" name="duur02" value="{{$kosten->duur02}}" />
      </div>

      <div class="fieldbox3">
        <label name="prijs02" class="label"></label>
        <input class="stringInput" name="prijs02" value="{{$kosten->prijs02}}" />
      </div>

      <!-- behandeling 3 -->
      <div class="fieldbox3">
        <label name="behandeling03" class="label"></label>
        <input class="stringInput" name="behandeling03" value="{{$kosten->behandeling03}}" />
      </div>

      <div class="fieldbox3">
        <label name="duur03" class="label"></label>
        <input class="stringInput" name="duur03" value="{{$kosten->duur03}}" />
      </div>

      <div class="fieldbox3">
        <label name="prijs03" class="label"></label>
        <input class="stringInput" name="prijs03" value="{{$kosten->prijs03}}" />
      </div>

      <!-- behandeling 4 -->
      <div class="fieldbox3">
        <label name="behandeling04" class="label"></label>
        <input class="stringInput" name="behandeling04" value="{{$kosten->behandeling04}}" />
      </div>

      <div class="fieldbox3">
        <label name="duur04" class="label"></label>
        <input class="stringInput" name="duur04" value="{{$kosten->duur04}}" />
      </div>

      <div class="fieldbox3">
        <label name="prijs04" class="label"></label>
        <input class="stringInput" name="prijs04" value="{{$kosten->prijs04}}" />
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
