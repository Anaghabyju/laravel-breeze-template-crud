@extends('dashboard')
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Animated Login Form | CodingNepal</title>
   
 </head>
  <body>
  <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    <div class="center">
      
      <form method="POST" action="{{route('customer.update',$data->id) }}">
        @csrf
      <div class="txt_field">
          <input type="text" class="block mt-1 w-full" name="name" placeholder="name" value="{{$data->name}}" required autofocus autocomplete="name" />
          <input-error :messages="$errors->get('name')" class="mt-2" />
       </div>
        <div class="txt_field">
          <input type="email" class="block mt-1 w-full" name="email" placeholder="email" value="{{$data->email}}" required autofocus autocomplete="email" />
          <input-error :messages="$errors->get('email')" class="mt-2" />
     </div>
        <div class="txt_field">
          <input type="number"class="block mt-1 w-full" name="phone" placeholder="phone" value="{{$data->phone}}" required autofocus autocomplete="phone" />
          <input-error :messages="$errors->get('password')" class="mt-2" />
      </div>
       <input type="submit" value="UPDATE" style="margin-bottom: 8%;"/>
      </form>
    </div>
  </body>
</html>
