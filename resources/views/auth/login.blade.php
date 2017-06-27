@extends('basic')

@section('content')

<div class="row">
  <div class="col-sm-4 offset-4">
    <div class="loginWrapper">
      <div class="loginContent">
        <h1 class="loginHeader">Inloggen</h1>

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

            <label for="email"></label>
            <input class="formField" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Emailadres" required autofocus>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif

            <label></label>
            <input class="formField" id="password" type="password" name="password" placeholder="Wachtwoord" required>
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif


          <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="rememberButton"> Onthouden
          </label>

          <button type="submit" class="loginButton">Login</button>
        </form>
        <!-- End form -->
      </div>
      <div class="forgotPassword">
        <a href="{{ route('password.request') }}">Wachtwoord vergeten?</a>
      </div>
    </div>
  </div>
</div>

@endsection
