<?php

use App\Models\Address;
use App\Models\Country;
use App\Models\Post;
use App\Models\State;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('relation',function() {
    $users = User::all();
    $addresses = Address::all();
    return view('test',compact('users','addresses'));

});
Route::get('posts',function(){
    // Post::insert([
    //     [
    //         'user_id' => 1 ,
    //         'name' => "post one"
    //     ],
    //     [
    //         'user_id' => 1 ,
    //         'name' => "post two"
    //     ],
    //     [
    //         'user_id' => 2 ,
    //         'name' => "post three"
    //     ],
    // ]);
    // Tag::insert([
    //     [

    //         'name' => "tag one"
    //     ],
    //     [

    //         'name' => "tag two"
    //     ],
    //     [

    //         'name' => "tag three"
    //     ],
    // ]);

    //many to many insert values
    $post = Post::first();
    // $tag = Tag::first();
    // $post->tags()->attach($tag);
    // $post->tags()->attach([2,3]);
    // $post->tags()->detach([2]);//remove
    // $post->tags()->sync([2,3]);//remove old data and insert new data


    $posts = Post::all();
    return view('post',compact('posts'));
});


Route::get('users',function() {
    $users = User::all();

    return view('user',compact('users'));

});
Route::get('tags',function() {
    $tags = Tag::all();

    return view('tag',compact('tags'));

});



//has many through

Route::get('location',function() {
    // $country = new Country();
    // $country->name = "egypt";
    // $country->save();

    $country = new Country(['name'=>'United States']);
    $country->save();
    $state = new State(['name'=>'California']);
    $country->states()->save($state);//insert using relasionship

    $state->cities()->createMany([
        [
            'name' => 'Los Angeles'
        ],
        [
            'name' => 'San Francisco'
        ],
    ]);
    $country = Country::first();


    return view('location',compact('country'));

});


////polymorphic

Route::get('image',function(){
    // $user = User::find(1);
    // $user->image()->create([
    //     'path' => '/upload/user_one.jpg'
    // ]);
    $post = Post::find(1);
    // $post->image()->create([
    //     'path' => '/upload/post_one.jpg'
    // ]);

    //access to post image
    return $post->image;
});