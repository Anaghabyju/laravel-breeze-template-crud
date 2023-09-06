<?php

namespace App\Http\Controllers;
use App\Http\Requests\CustomerFormRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function create()
   {
    return view('customer.create');
   }
   public function store( CustomerFormRequest $request)
   { 
       $customer =  Customer::create([
         'name' => $request->name,
         'email' => $request->email,
         'phone' => $request->phone,
         
       ]);
     
     return redirect()->route('customer.index')->with('message','added successfully');

   }
   public function index()
   {
      $data=Customer::all();
      return view('customer.index',compact('data'));
   }
   public function edit($id)
     {
        $data=Customer::find($id);
        return view('customer.edit',compact('data'));
     }
 
     public function update(Request $request,$id)
     {
        $del=Customer::find($id);
        $del->name=$request->input('name');
        $del->email=$request->input('email');
        $del->phone=$request->input('phone');
        $del->update();
    return redirect()->route('customer.index')->with('message','customer Has Been updated successfully');
    }
 
  
    public function delete($id)
    {
       $del=Customer::find($id);
       $del->delete();
        return redirect()->route('customer.index')->with('message','customer has been deleted successfully');
    }

    
}



