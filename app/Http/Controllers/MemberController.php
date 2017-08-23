<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyAdmin;
use App\Productimage;
use Meta;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index(){

    	Meta::title('Members Page');
        return view('members.index'); 
    }

    public function listproduct(){
        Meta::title('My Ads');
    	$user_id = Auth()->user()->id;
    	$records = Product::where('user_id', $user_id)->with('productimage')->get();
    	return view('members.products', array('products'=>$records));
    }

    public function newproduct(){
        Meta::title('New Product');
    	$categories = Category::all();
    	return view('members.new', array('categories' => $categories));
    }
    public function saveproduct(Request $request){
        $this->validate($request,[
            'name'=>'required'
        ]);
    	$user_id = Auth()->user()->id;
    	$product = new Product();
    	$product->name= $request['name'];
    	$product->price= $request['price'];
    	$product->description= $request['description'];
    	$product->expiry_date= $request['expiry_date'];
    	$product->category_id= $request['category_id'];
    	$product->user_id = $user_id;

            if($product->save()){
                if($file = $request->file('image')){              
                $ext = $file->getClientOriginalExtension();
                $fileName = "produc-".time().'-'.$product->id.'-pic.'.$ext;
                $dest = "uploads/product/";
                if($file->move($dest,$fileName)){
                    $image = new Productimage;

                    $image->image = $fileName;
                    $image->product_id = $product->id;
                    
                    $image->save();
                }

            }

         }

    	return redirect('members/myads');
    }
    public function editproduct($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('members.edit', array('product' => $product, 'categories' => $categories)); 
        //also we can write last line as!!!
        //return view('members.edit', compact('product', 'categories')); 
    }
    public function updateproduct(Request $request){

        $product = Product::find($request['id']);
        $product->name= $request['name'];
        $product->price= $request['price'];
        $product->description= $request['description'];
        $product->expiry_date= $request['expiry_date'];
        $product->category_id= $request['category_id'];
        $product->save();
        return redirect('members/myads');    
    }
    public function deleteproduct($id){
        Product::find($id)->delete();
        return redirect('members/myads');
    }
    public function profile(){
        Meta::title('Profile');
        $user_id = Auth()->user()->id;
        $profile = User::find($user_id);
        return view('members.profile', compact('profile'));
    }
    public function updateprofile(Request $request){
         $user_id = Auth()->user()->id;
        $profile = User::find($user_id);

        $this->validate($request, [
            'email' => 'required|email|unique:users,email,'.$user_id,
            'name' => 'required'
            ]);

       /* $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:users,email,'.$user_id,
            'name' => 'required'
            ]);
        if ($validator->fails()) {
            $response = $validator->errors()->all();
            return redirect('members/profile');
        }*/
        $profile->name = $request['name']; 
        $profile->email = $request['email'];
        if(!empty($request['password'])){
            $profile->password = bcrypt($request['password']);
        }

        if($profile->save()){
            Mail::to('pantharish120@gmail.com')->send(new NotifyAdmin($profile));
        }
        return redirect('members/profile');
    }
}


