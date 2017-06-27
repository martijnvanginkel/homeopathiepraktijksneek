@if (!Auth::guest())
  @include('back.nav')
@else
  <div class="menuWrapper">
    <ul>
      <li><h1 id="homeopathieButton"><a href="{{ url('/') }}">Homeopathie</a></h1></li>
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/homeopathie') }}">Homeopathie</a></li>
      <li><a href="{{ url('/behandelingen') }}">Behandelingen</a></li>
      <li><a href="{{ url('/praktijk') }}">De praktijk</a></li>
      <li><a href="{{ url('/kosten') }}">Kosten</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </div>
@endif
