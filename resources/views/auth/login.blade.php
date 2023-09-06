<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="txt_field">
          <input type="email" class="block mt-1 w-full" type="email" name="email" placeholder="email" required autofocus autocomplete="email" />
          <input-error :messages="$errors->get('email')" class="mt-2" />
          <span></span>

        </div>
        <div class="txt_field">
          <input type="password" id="password" class="block mt-1 w-full" type="password" name="password" placeholder="password" required autocomplete="current-password"/>
          <input-error :messages="$errors->get('password')" class="mt-2" />
          <span></span>
         
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" />
        <div class="signup_link">Not a member? <a href="{{route('register')}}">Signup</a></div>
      </form>
    </div>
  </body>
</html>
