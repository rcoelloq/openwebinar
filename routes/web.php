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


Route::pattern('id', '\d+');
Route::pattern('hex', '[a-f0-9]+');


Route::get('welcome/{name?}/{apellido?}', function ($name = null, $apellido = null) {
    return 'Nombre iou: ' . $name. ' ' . $apellido;

});

Route::get('post/}', function ($id = null) {
  $str = 'Retrieving post ' . $id;
  if ($id == null )
  		$str =  'Identificador Null';	
  return  $str;
});

Route::get('hexaroute/{hex?}', function ($hex = null) {
  return 'Retrieving Hex ' . $hex;
});

Route::get('user/profile', ['as' => 'profile', function () {
  
  $url = route('profile');
  
  return "This url is: " . $url;
}]);

Route::get('user/{id}/profile/{det}', ['as' => 'profile', function ($id, $det) {

  $url = route('profile', ['id' => $id, 'det' => $det]);
  return 'This url is: ' . $url;

}]);