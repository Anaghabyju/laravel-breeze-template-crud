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
      <h1>Register</h1>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="txt_field">
          <input type="text" class="block mt-1 w-full" name="name" placeholder="name" required autofocus autocomplete="name" />
          <input-error :messages="$errors->get('name')" class="mt-2" />
          <span></span>
         
        </div>
        <div class="txt_field">
          <input type="email" class="block mt-1 w-full" name="email" placeholder="email" required autofocus autocomplete="email" />
          <input-error :messages="$errors->get('email')" class="mt-2" />
          <span></span>
        
        </div>
        <div class="txt_field">
          <input type="password"class="block mt-1 w-full" name="password" placeholder="password" required autofocus autocomplete="password" />
          <input-error :messages="$errors->get('password')" class="mt-2" />
          <span></span>
          
        </div>
        <div class="txt_field">
          <input type="password" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password" />
          <input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          <span></span>
       
        </div>
        <input type="submit" value="Register" />
        <div class="signup_link">Already registered? <a href="{{route('login')}}">Login</a></div>
      </form>
    </div>
    
  </body>
</html>
