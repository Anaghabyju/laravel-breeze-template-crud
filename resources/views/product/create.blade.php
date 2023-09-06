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
     
      <form method="POST" action="{{ route('product.add_product') }}" enctype="multipart/form-data">
        @csrf
        <div class="txt_field">
        <select class="form-select" aria-label="Default select example" name="catogory_id">
           
  <option style="color: brown;">select the option</option>
  @foreach($data as $datas)
   <option value="{{ $datas->id }}">{{$datas->id}} {{$datas->catogory}}</option>
 @endforeach
</select>
        </div>
        <div class="txt_field">
          <input type="text" class="block mt-1 w-full" name="product_name" placeholder=" product name" required autofocus autocomplete="product_name" />
          <input-error :messages="$errors->get('product_name')" class="mt-2" />
          <span></span>
         
        </div>
       
        <div class="txt_field">
          <input type="file"class="block mt-1 w-full" name="image" placeholder="image" required autofocus autocomplete="image" />
          <input-error :messages="$errors->get('image')" class="mt-2" />
          <span></span>
          
        </div>
       
        <input type="submit" value="ADD" style="margin-bottom: 8%;"/>
       
      </form>
    </div>
  </body>

