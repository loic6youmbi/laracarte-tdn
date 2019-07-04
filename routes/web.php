<?php
Route::name('root-path')->get('/','PagesController@home');
Route::get('/about', 'PagesController@about')->name('about-path');
