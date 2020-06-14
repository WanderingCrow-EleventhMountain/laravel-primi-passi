<?php
Route::get('/home', function () {
  $pory = "Variabile per passare il tag <nav> ma non va. Sono deluso.";
      return view('extendshome', compact('pory'));
})->name("home");

Route::get('/about', function () {
  $pory = "Variabile per passare il tag <nav> ma non va. Sono deluso.";
      return view('extendsabout', compact('pory'));
})->name("about");


Route::get('/contacts', function () {
  $pory = "Variabile per passare il tag <nav> ma non va. Sono deluso.";
      return view('extendscontacts', compact('pory'));
})->name("contacts");
