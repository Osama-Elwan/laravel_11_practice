<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    // public function index() {

    // }
    function index() {
        //insert data
        // DB::table('users')->insert([
        //     'name' => 'mohamed',
        //     'email' => 'mohamed@a.com',
        //     'password' => '123456'
        // ]);
    //     DB::table('users')->insert(
    //     [    [
    //             'name' => 'khalel',
    //             'email' => 'khalel@a.com',
    //             'password' => '123456'
    //         ],
    //         [
    //             'name' => 'maha',
    //             'email' => 'maha@a.com',
    //             'password' => '123456'
    //         ]]
    // );



    //Get data form database
    // $users =DB::table('users')->get();
    // $users =DB::table('users')->where('id',6)->first();
    // $users =DB::table('users')->where('email','khalel@a.com')->where('id',6)->first();
    // $users =DB::table('users')->where('id',">",2)->get();
    // return $users;
    // DB::table('users')->where('id',6)->update([
    //     'name' => 'john deo',
    //     'email' => 'test@yahoo.com'
    // ]);
    // Db::table('users')->where('id',6)->delete();
    // Db::table('users')->where('id','>',6)->delete();




    // $blogs=DB::table('blogs')->select('title')->get();
    // $blogs=DB::table('blogs')->pluck('title');
    // $blogs=DB::table('blogs')->pluck('title')->toArray();
    // $blogs=DB::table('blogs')->pluck('title','id')->toArray();

    // dd($blogs);


    // $products = DB::table('products')->get();
    // dd($products);
    // $products = DB::table('products')->get()->dd();
    // $products = DB::table('products')->count();
    // $products = DB::table('products')->max('price');
    // $products = DB::table('products')->min('price');
    // $products = DB::table('products')->sum('price');
    $products = DB::table('products')->avg('price');
    dd($products);

        return view('welcome');
    }
    function showAboutPage() {

        return view('about');
    }
}
