<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Query;
use DB;
use Session;

class UserController extends Controller
{
    //
	    public function login()
	    {
	    	return view('login');
	    }
	    public function loginuser(Request $request)
	    {
    	if($request->isMethod('post'))
    	{
    		$username=$request->username;
    		$password=$request->password;
    		$users=DB::select('select * from signup where fullname=? and password=?',[$username,$password]);
    		$uid=$users[0]->id;
    		if($users)
    		{
    			session()->put('userid',$uid);
    			return redirect()->to('/');
    		}
    		else{
    			return view('login');
    		}
    	}
    }

        public function signup(Request $request)
       {
    	if($request->isMethod('post'))
    	{
    		$obj= new Signup;
    		$obj->fullname=$request->name;
    		$obj->email=$request->email;
    		$obj->password=$request->password;
    		$obj->save();
    	}
    	return view('login');
       }
        public function logout()
       {
    	Session::flush();
    	return redirect()->to('login');
       }
    
		//function of home page

		public function home()
		{
		 $category=Category::all();
		 $product=Product::all();
		 return view('home',compact('category','product'));
		}
		public function displaycategory($id)
		{
			$category=Category::all();
			$product=Product::where('categoryid',$id)->get();
			$cat_id=Category::where('id',$id)->get();
			return view('products',compact('category','product','cat_id'));
		}
		public function buyproduct($id)
		{
			$category=Category::all();
			$product=Product::where('id',$id)->get();
			return view('buy-product',compact('category','product'));
		}
		public function newproduct()
		{
			$category= Category::all();
			$product=Product::orderby('id','desc')->get();
			return view('new-product',compact('category','product'));
		}
		public function special()
		{
			$category= Category::all();
			$product=Product::where('special','=','1')->get();
			return view('special',compact('category','product'));
		}
		public function allproducts()
		{
			$category=Category::all();
			$product=Product::inRandomOrder()->get();
			return view('allproduct',compact('category','product'));
		}
		public function contact()
		{
			$category=Category::all();
			return view('contactus',compact('category'));
		}
		public function addtocart(Request $request)
		{
			if(session()->has('userid'))
			{
			if($request->isMethod('post'))
			{
			$obj=new Cart;
			$obj->userid=$request->uid;
			$obj->productid=$request->pid;
			$obj->qty=$request->quantity;
			$obj->save();
		}
		return redirect()->back();
		 //$category = Category::all();
        //$product = Product::where('id',$req->pid)->get();
        //return view('buy-product',compact('product','category'));
	}else{
		return redirect('login');
	}
 }
        public function checkout($id)
        {
        	$category=Category::all();
        	$checkout=DB::table('cart')
        	->join('signup','cart.userid','=','signup.id')
        	->join('product','cart.productid','=','product.id')
        	->select('cart.id','signup.fullname','product.productname','product.productprice','cart.qty')
        	->where('cart.userid','=',$id)->get();
        	return view('checkout',compact('checkout','category'));
        }
        public function search(Request $req){
        if($req->isMethod('post'))
		{
            $search = $req->search;
            $product=Product::where('productname','LIKE','%'.$search.'%')->get();
        }
        $category = Category::all();
        return view('search',compact('category','product'));
    }
    	public function submitquery(Request $request)
    	{
    		if(session()->has('userid'))
    		{
    		if($request->isMethod('post'))
    		{
    			$obj= new Query;
    			$obj->name=$request->name;
    			$obj->email=$request->email;
    			$obj->prouctname=$request->productname;
    			$obj->review=$request->review;
    			$obj->rating=$request->rating;
    			$obj->save();
    		}
    	  }
    		return redirect()->back();
    	}
    	public function deleteproduct($id)
    	{
    	  $data=Cart::find($id)->delete();
    	  return redirect()->back();

    	}
}


















