<?php

use Illuminate\Support\Facades\Route;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Profile;

use App\Models\Guestbook;
use Illuminate\Http\Request;

Route::get('/', function () {
    $profile = Profile::first();
    return view('pages.home', compact('profile'));
});

Route::get('/about', function () {
    $profile = Profile::first();
    return view('pages.about', compact('profile'));
});

Route::get('/skills', function () {
    $dbSkills = Skill::all()->groupBy('category');
    return view('pages.skills', compact('dbSkills'));
});

Route::get('/project', function () {
    $projects = Project::all();
    return view('pages.project', compact('projects'));
});

Route::get('/certificate', function () {
    $certificates = \App\Models\Certificate::all();
    return view('pages.certificate', compact('certificates'));
});

Route::get('/contact', function () {
    $profile = Profile::first();
    return view('pages.contact', compact('profile'));
});

Route::get('/guestbook', function () {
    $messages = Guestbook::orderBy('created_at', 'desc')->get();
    return view('pages.guestbook', compact('messages'));
});

Route::post('/guestbook', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'message' => 'required|string'
    ]);
    Guestbook::create([
        'name' => $request->name,
        'message' => $request->message
    ]);
    return redirect('/guestbook')->with('success', 'Pesan berhasil dikirim!');
});
