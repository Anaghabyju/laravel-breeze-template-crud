<?php

namespace App\Http\Controllers;

use App\Models\Catogory;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index()
    {
        $catid=DB::table('catogories')
        ->join('products','catogories.id','=', 'products.catogory_id')
  
        ->select('catogories.catogory','products.product_name','products.image','products.catogory_id','products.id',)
       -> get();
         return view('product.index',compact('catid'));
    }

    public function create()
    {
        $data=Catogory::all();
        return view('product.create',compact('data'));
    }

   public function store(Request $request)
   {
    
   $data= $request->validate([
        'product_name'=>'required',
        'image'=>'required',
    ]);

    $path='asset/storage/images/'.$data['image'];
    $filename=time().$request->file('image')->getClientOriginalName();
    $path=$request->file('image')->storeAs('images',$filename,'public');
    $datas["image"]='/storage/'.$path;
    $data['image']=$filename;
    product::create([
        'product_name'=>$request->product_name,
        'image'=>$filename,
        'catogory_id'=>$request->catogory_id,
        
    ]);
    return redirect()->route('product.index')->with('message','product Has Been added successfully');
   }

  public function delete($id)
  {
    
    $data=product::find($id);
    $data->delete();
     return redirect()->route('product.index')->with('message','product has been deleted successfully');
  }
}
