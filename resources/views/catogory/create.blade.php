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
     
      <form method="POST" action="{{ route('add-catogory')}}">
        @csrf
        <div class="txt_field">
          <input type="text" class="block mt-1 w-full" name="catogory" placeholder=" catogory name" required autofocus autocomplete=" catogory" />
          <input-error :messages="$errors->get('name')" class="mt-2" />
          <span></span>
         
        </div>
        
       
        <input type="submit" value="Submit" style="margin-bottom: 8%;"/>
       
      </form>
    </div>
  </body>

