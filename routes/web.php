<?php
// Route::group(["prefix"=>"users","middleware"=>"auth"],function(){
//       Route::get("/",function(){
//           return "hi users";
//       });
//        Route::get('delete', function (){
//            return  'delete';
//        });
//        Route::get('update', function (){
//         return  'update';
//     });
// });

// // Route::get('/', function () {
// //     return view('welcome');
// // })->middleware("auth");

// Route::get('/login', function () {
//     return 'login';
// });

// Route::get('/test', function () {
//     return  "abdelatif";
// })->name("test");

// Route::get('/test1/{id?}', function ($id=null) {
//     return  $id ?? "not exist";
// })->name("details");


// Route::resource("news","Newontroller");

// // Route::get('getindex', "Front\UserController@getIndex" );

// Route::get('/getAdmin',"Front\UserController@getAdmin");
// // Route::get("test4",function(){
// // return  "test4";

// // });
$data=[
    'name'=>"abdelatif", 
    "age"=>'21'
];
Route::get("/",function(){

    //  $data['name']="abdelatif";
    //  $data[' age']="21";
    //  $data['city']="maroc";
    $data=[];
    return view("welcome")->with('data',$data);
});
Auth::routes(["verify"=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware("verified");


