<?php

namespace App\Http\Controllers;

use App\Models\Catogory;
use Illuminate\Http\Request;


class CatogoryController extends Controller
{
   public function index()
   {
    $data=Catogory::all();
      return view('catogory.index',compact('data'));
   }
    public function create()
   {
    return view('catogory.create');
   }
   
   public function store(Request $request)
   {
      $request->validate([
        'catogory'=>'required',
      ]);
      Catogory::create([
        'catogory'=> $request->catogory,
      ]);
      return redirect()->route('catogory.index')->with('message','added successfully');
   }

   public function edit($id)
   {
    $data=Catogory::find($id);
    return view('catogory.edit',compact('data'));
   }
   public function update(Request $request,$id)
   {
      $del=Catogory::find($id);
      $del->catogory=$request->input('catogory');
     
      $del->update();
  return redirect()->route('catogory.index')->with('message','catogory Has Been updated successfully');
  }
   
 
        
    
  




    




  
}
