<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/*levels route*/
Route::get('/computer-science/100/dashboard', function () {
    return view('computer-science/100/dashboard');
});

Route::get('/computer-science/200/dashboard', function () {
    return view('computer-science/200/dashboard');
});

Route::get('/computer-science/300/dashboard', function () {
    return view('computer-science/300/dashboard');
});

Route::get('/computer-science/400/dashboard', function () {
    return view('computer-science/400/dashboard');
});

Route::get('/computer-science/100/CSC120/coursecontent', function () {
    return view('computer-science/100/CSC120/coursecontent');
});

//course details
Route::get('/computer-science/100/CSC120/1/coursedetails', function () {
    return view('computer-science/100/CSC120/1/coursedetails');
});

//video routes
Route::get('/computer-science/100/CSC120/1/video-one', function () {
    return view('computer-science/100/CSC120/1/video-one');
});


/******* CSC course contents *********/
Route::get('/computer-science/100/MAT112/coursecontent', function () {
    return view('computer-science/100/MAT112/coursecontent');
});

Route::get('/computer-science/100/CSC104/coursecontent', function () {
    return view('computer-science/100/CSC104/coursecontent');
});

/*********/
Route::get('/computer-science/100/CSC104/1/coursedetails', function () {
    return view('computer-science/100/CSC104/1/coursedetails');
});


/*CSC 112*/
Route::get('/computer-science/100/CSC112/coursecontent', function () {
    return view('computer-science/100/CSC112/coursecontent');
});

Route::get('/computer-science/100/CSC112/1/coursedetails', function () {
    return view('computer-science/100/CSC112/1/coursedetails');
});

/*CSC 132*/
Route::get('/computer-science/100/CSC132/coursecontent', function () {
    return view('computer-science/100/CSC132/coursecontent');
});

Route::get('/computer-science/100/CSC132/1/coursedetails', function () {
    return view('computer-science/100/CSC132/1/coursedetails');
});

/*MAT 142*/
Route::get('/computer-science/100/MAT142/coursecontent', function () {
    return view('computer-science/100/MAT142/coursecontent');
});

Route::get('/computer-science/100/MAT142/1/coursedetails', function () {
    return view('computer-science/100/MAT142/1/coursedetails');
});

/*MAT 162*/
Route::get('/computer-science/100/MAT162/coursecontent', function () {
    return view('computer-science/100/MAT162/coursecontent');
});

Route::get('/computer-science/100/MAT162/1/coursedetails', function () {
    return view('computer-science/100/MAT162/1/coursedetails');
});

/*PHY 102*/
Route::get('/computer-science/100/PHY102/coursecontent', function () {
    return view('computer-science/100/PHY102/coursecontent');
});

Route::get('/computer-science/100/PHY102/1/coursedetails', function () {
    return view('computer-science/100/PHY102/1/coursedetails');
});

/*PHY 104*/
Route::get('/computer-science/100/PHY104/coursecontent', function () {
    return view('computer-science/100/PHY104/coursecontent');
});

Route::get('/computer-science/100/PHY104/1/coursedetails', function () {
    return view('computer-science/100/PHY104/1/coursedetails');
});

/*GNS 102*/
Route::get('/computer-science/100/GNS102/coursecontent', function () {
    return view('computer-science/100/GNS102/coursecontent');
});

Route::get('/computer-science/100/GNS102/1/coursedetails', function () {
    return view('computer-science/100/GNS102/1/coursedetails');
});



//video routes
Route::get('/computer-science/100/CSC104/1/video-one', function () {
    return view('computer-science/100/CSC104/1/video-one');
});