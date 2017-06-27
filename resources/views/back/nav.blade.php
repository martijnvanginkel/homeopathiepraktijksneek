<div class="backMenu">
  <nav>
    @if (!Auth::guest())

    <div class="userInfo">
      <div class="row">
        <div class="col-md-6"><img class="userPicture" src="{{URL::asset('img/female.png')}}">

          <div class="userLeftColumn">
            <!-- Logout button -->
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              Log uit
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="userRightColumn">
            <h2>Welkom,</h2>
            <h1>{{ Auth::user()->name }}</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="menu">
      <ul>
          <ul class="togglePagesMenu">
            <li>Home
              <a href="{{ url('/') }}">Bekijken</a>
              <a href="{{ url('/homebewerken') }}">Bewerken</a>
            </li>
            <li>Homeopathie
              <a href="{{ url('/homeopathie') }}">Bekijken</a>
              <a href="{{ url('/homeopathiebewerken') }}">Bewerken</a>
            </li>
            <li>Behandelingen
              <a href="{{ url('/behandelingen') }}">Bekijken</a>
              <a href="{{ url('/behandelingenbewerken') }}">Bewerken</a>
            </li>
            <li>De praktijk
              <a href="{{ url('/praktijk') }}">Bekijken</a>
              <a href="{{ url('/praktijkbewerken') }}">Bewerken</a>
            </li>
            <li>Kosten
              <a href="{{ url('/kosten') }}">Bekijken</a>
              <a href="{{ url('/kostenbewerken') }}">Bewerken</a>
            </li>
            <li>Contact
              <a href="{{ url('/contact') }}">Bekijken</a>
              <a href="{{ url('/contactbewerken') }}">Bewerken</a>
            </li>
          </ul>
      </ul>
    </div>

    @endif
  </nav>
</div>
