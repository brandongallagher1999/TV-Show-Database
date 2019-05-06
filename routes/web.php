<?php




// the / is for the part of the URL you are requesting
// this is the base, main part of website you are accessing

Route::get('/', 'HomeController@home'); //Calls the HomeControllers 'home' function and returns the view from inside that controller.


Route::get('special', 'HomeController@special'); //Requests special page.
