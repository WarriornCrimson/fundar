<?php

use App\Http\Controllers\Campaigns;
use App\View\Components\Users;
use Illuminate\Support\Facades\Route;

Route::get('/landing-page', function () {
    return view('index');
})->name('landing');

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
    return view('savedcampaigns');
})->name('saved');

Route::get('/messages', function() {
    return view('message');
})->name('messages');

Route::get('/edit-profile', function() {
    return view('editprofile');
})->name('edit-profile');

Route::get('/student-verification', function() {
    return view('verification');
})->name('student-verification');

Route::get('/notifications', function() {
    return view('notifications');
})->name('notifications');

Route::get('/profile', function() {
    return view('userprofile');
})->name('profile');

Route::get('/view-other-profile', function() {
    return view('view-other-profile', [Users::class]);
})->name('view-other');

Route::get('/create-campaign', function() {
    return view('campaign-creation');
})->name('createCampaign');

Route::get('/admin/dashboard', function() {
    return view('admindashboard');
})->name('admin-dashboard');

// Admin Accounts
Route::get('/admin/accounts', function () {
    return view('admin.accounts');
})->name('admin-accounts');

// Admin Campaigns
Route::get('/admin/campaigns', function () {
    return view('admin.campaigns');
})->name('admin-campaigns');

// Admin Donations
Route::get('/admin/donations', function () {
    return view('admin.donations');
})->name('admin-donations');

// Admin Students
Route::get('/admin/students', function () {
    return view('admin.students');
})->name('admin-students');

// Admin Reports
Route::get('/admin/reports', function () {
    return view('admin.reports');
})->name('admin-reports');

// Admin Settings
Route::get('/admin/settings', function () {
    return view('admin.settings');
})->name('admin-settings');

