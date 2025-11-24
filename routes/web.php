<?php

use App\Http\Controllers\Campaigns;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/registration', function() {
    return view('registration');
})->name('registration');

Route::get('/home', function() {
    return view('dashboard');
})->name('home');

Route::get('/campaign/{id}', [Campaigns::class, 'showCampaignDetails'])->name('campaign.details');

Route::get('/leaderboard', function() {
    return view('leaderboard');
})->name('leaderboard');

Route::get('/challenges', function() {
    return view('challenges');
})->name('challenges');

Route::get('/saved', function() {
    return view('saved');
})->name('saved');

Route::get('/messages', function() {
    return view('messages');
})->name('messages');

Route::get('/notifications', function() {
    return view('notifications');
})->name('notifications');

Route::get('/profile', function() {
    return view('profile');
})->name('profile');


