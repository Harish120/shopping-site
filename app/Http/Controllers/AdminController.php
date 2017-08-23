<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.index');
    }

    

    //Admin User Controller
    public function listuser(){
    	$users = User::all();
    	return view('admin.user', array('users'=>$users));
    }
    public function newuser(){
    	return view('admin.newuser');
    }
    public function saveuser(Request $request){
    	$user = new User();
    	$user->name= $request['name'];
    	$user->email= $request['email'];
    	$user->password= bcrypt($request['password']);
    	$user->role= $request['role'];
    	$user->save();
    	return redirect('admin/user');

    }

    public function edituser($id){
    	$user = User::find($id);
    	return view('admin.edituser', array('user'=>$user));
    } 

    public function updateuser(Request $request){
    	$user = User::find($request['id']);
    	$user->name= $request['name'];
    	$user->email= $request['email'];
    	$user->password= $request['password'];
    	$user->role= $request['role'];
    	$user->save();
    	return redirect('admin/user');
    }
     public function deleteuser($id){
    	User::find($id)->delete();
    	return redirect('admin/user');
    } 

    //Admin Category Controller
    public function listcategory(){
        $categories = Category::all();
        return view('admin.category.category', compact('categories'));
    }
    public function newcategory(){
        return view('admin.category.newcategory');
    }

    public function savecategory(Request $request){
        $category = new Category();
        $category->name= $request['name'];
        $category->save();
        return redirect('admin/category');

    }

     public function editcategory($id){
        $category = Category::find($id);
        return view('admin.category.editcategory', array('category'=>$category));
    } 

    public function updatecategory(Request $request){
        $category = User::find($request['id']);
        $category->name= $request['name'];
        $category->save();
        return redirect('admin/category');
    }
     public function deletecategory($id){
        Category::find($id)->delete();
        return redirect('admin/category');
    }
}
