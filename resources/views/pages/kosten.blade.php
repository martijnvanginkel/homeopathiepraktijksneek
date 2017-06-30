@extends('main')

@section('content')

@include('partials._bannerphoto')



<div class="contentWrapper">
  <h1 class="mainHeader"> {{ $kosten->title }} </h1>

  <p>{!! nl2br(e($kosten->paragraph)) !!}</p>



<table class="table table-striped">
    <thead>
      <tr>
        <th>Behandeling</th>
        <th>Duur</th>
        <th>Prijs</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> {{ $kosten->behandeling01 }} </td>
        <td> {{ $kosten->duur01 }} </td>
        <td> {{ $kosten->prijs01 }} </td>
      </tr>
      <tr>
        <td> {{ $kosten->behandeling02 }} </td>
        <td> {{ $kosten->duur02 }} </td>
        <td> {{ $kosten->prijs02 }} </td>
      </tr>
      <tr>
        <td> {{ $kosten->behandeling03 }} </td>
        <td> {{ $kosten->duur03 }} </td>
        <td> {{ $kosten->prijs03 }} </td>
      </tr>
      <tr>
        <td> {{ $kosten->behandeling04 }} </td>
        <td> {{ $kosten->duur04 }} </td>
        <td> {{ $kosten->prijs04 }} </td>
      </tr>

    </tbody>
  </table>

</div>


@include('partials._meerontdekken')

@endsection
