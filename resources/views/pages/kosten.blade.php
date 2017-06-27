@extends('main')

@section('content')

@include('partials._bannerphoto')



<div class="contentWrapper">
  <h1 class="mainHeader">hoi</h1>

  <p>asdfk;</p>



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
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>

</div>


@include('partials._meerontdekken')

@endsection
