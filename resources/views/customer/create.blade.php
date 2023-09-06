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
    <div class="center">
     
      <form method="POST" action="{{ route('add-customer') }}">
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
          <input type="number"class="block mt-1 w-full" name="phone" placeholder="phone" required autofocus autocomplete="phone" />
          <input-error :messages="$errors->get('password')" class="mt-2" />
          <span></span>
          
        </div>
       
        <input type="submit" value="Register" style="margin-bottom: 8%;"/>
       
      </form>
    </div>
  </body>

