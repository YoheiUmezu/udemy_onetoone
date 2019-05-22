<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User;
use App\Address;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/insert', function(){
//      $user = User::find(1);

//      if($user){
//          Address::create([
//             'user_id' => $user->id,  
//             'name' => '1234 Houston av NY NY 234'
//         ]);
//      }

// });


Route::get('/insert', function(){
      $user = User::findOrFail(1);
      $address = new Address(['name'=>'1234 Houston av NY NY 234']);//dataを入れる

      $user->address()->save($address);//save(インスタンス) https://wa3.i-3-i.info/word1118.html
  });

  
//  Route::get('/update', function(){
//      $address = Address::whereEUserId(1)->first();
//      $address->name = "4352 Alaska";
//      $address->save();
//  });

// Route::get('/read', function(){
//     $user = User::findOrFail(1);
//     echo $user->address->name;
// });

// Route::get('/delete', function(){
//     $user = User::findOrFail(1);
//     $user->address()->delete();
// });