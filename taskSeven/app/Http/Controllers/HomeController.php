<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    // public function index() {

    // }
    function index() {
    //create data using orm (there is another way)
    // $user = new User();//get model
    // $user->name ='a7med';
    // $user->email ='a7med@gmail.com';
    // $user->password ='123456';//password hashed auto
    // $user->save();

    // $product = new Product();
    // $product->name = 'Car';
    // $product->description = 'Test description';
    // $product->price = 5000;
    // $product->save();

    //get data
    // $users = User::all();
    // $users = User::all();//we can use get()
    // foreach($users as $user) {
        //     echo $user->name . '---'. $user->email;
        //     echo "<br>";
        // }
        // dd ($users);
    // $user = User::where('id',1)->first();
    // $user = User::find(10);
    // dd($user);


    //Update
    // $user = User::where('id',8)->first();
    // $user = User::find(8);
    // $user->email ='test@test.com';
    // $user->save();

    //Delete
    // $user = User::find(8);
    // $user->delete();
    // $user = User::find(8)->delete();
    // $user = User::findorfail(8)->delete();

    //way to create data
    // User::create([
    //     'name' => 'test name',
    //     'email' => 'test2@test.com',
    //     'password' => '123456',//we should hash it becouse it save pass 123456 not hashed
    //     'email_verified_at' => 'hello world',//just to test fillabel in user model
    // ]);
    // User::insert([
    //     [
    //         'name' => 'test3 name',
    //         'email' => 'test3@test.com',
    //         'password' => '123456',
    //     ],
    //     [
    //         'name' => 'test4 name',
    //         'email' => 'test4@test.com',
    //         'password' => '123456',//we should hash it
    //     ],
    // ]);



    // $product = Product::where('id',1)->first();
    // $product = Product::where('id','>',1)->get();
    // $product = Product::where('id',1)
    // ->where('price',168)
    // ->get();
    // $product = Product::where('id',1)
    // ->where('price',300)
    // ->get();
    // $product = Product::where(['id' => 1 , 'price' => 168])->get(); //we use this if = only not any operator else
    // $product = Product::where('name','LIKE','%aut%')->get();
    // $product = Product::where('name','NOT LIKE','%aut%')->get();
    // $product = Product::where('name','LIKE','%aut%')->orWhere('description','LIKE','%dolore%')->get();
    // $product = Product::whereIn('id',[1,2,3,4,5])->get();
    // $product = Product::whereBetween('price',[100,200])->get();
    // dd($product);

    //query scopes

        // $blogs = Blog::where('status',1)->get();//go to Blog model
        // $blogs = Blog::Active()->get();//go to Blog model //to call remove scope and put Active only
        // dd($blogs);

        //soft delete
        // Product::find(1)->delete();
        // $products = Product::find(1); //return null
        // $products = Product::all();
        // $products = Product::withTrashed()->find(1);
        // $products = Product::withTrashed()->get();
        // $products = Product::onlyTrashed()->get();
        // $products = Product::onlyTrashed()->find(1)->restore();
        // $products = Product::find(1)->forceDelete();//to delete row


        // dd($products);

        return view('welcome');
    }
    function showAboutPage() {

        return view('about');
    }
}
