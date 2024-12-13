<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//say sobhan allah

Route::get('/join',function() {//inner join
    // $userWithOrders = DB::table('users')
    // ->join('orders','users.id', '=' ,'orders.user_id')
    // // ->join('products','users.id', '=' ,'products.user_id')//u can add another table ex ....//dont remove comment
    // // ->select('users.*','orders.*','products.*)//ex........//dont remove comment
    // // ->select('users.name','orders.product_name')
    // // ->select('users.*','orders.product_name')//dont put orders.* will get issue i dont know why it happen but i will search//it happen becouse two tables has some columns with the same name //the same thing happen here
    // //solution
    // ->select('users.*','orders.id as order_id','orders.total_amount as total')
    // ->get();


    // $userWithOrders = DB::table('users')//left join //retrun all data for left tabel and right table but if no data in right table will return null
    // ->leftJoin('orders','users.id', '=' ,'orders.user_id')
    // ->select('users.*','orders.product_name')//dont put orders.* will get issue i dont know why it happen but i will search//it happen becouse two tables has some columns with the same name
    // //the same solution in previous case
    // ->get();
    // return $userWithOrders;

    // $orderWithUsers = DB::table('orders')//right join //retrun all data for right tabel and left table but if no data in right table will return null
    // ->rightJoin('users','users.id', '=' ,'orders.user_id')
    // ->select('orders.*','users.name')
    // ->get();
    // return $orderWithUsers;

    //full outer join
    $fullOuterJoin = DB::table('users')
    ->leftJoin('orders','users.id', '=' ,'orders.user_id')
    ->select('users.*','orders.product_name')
    // ->unionAll(
    ->union(
        DB::table('users')
        ->rightJoin('orders','users.id', '=' ,'orders.user_id')
        ->select('users.*','orders.product_name')
    )->get();
    return $fullOuterJoin;
});
