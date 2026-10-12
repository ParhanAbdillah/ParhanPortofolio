<?php

use App\Models\Certificate;
use App\Models\Guestbook;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    $certificates = Certificate::all();

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
        'message' => 'required|string',
    ]);
    Guestbook::create([
        'name' => $request->name,
        'message' => $request->message,
    ]);

    return redirect('/guestbook')->with('success', 'Pesan berhasil dikirim!');
});

// Fallback image & public storage route (ensures 100% reliability across all web servers & symlink states)
Route::get('/storage/{path}', function (string $path) {
    $filePath = storage_path('app/public/'.$path);
    if (! file_exists($filePath)) {
        abort(404);
    }
    $mimeType = mime_content_type($filePath) ?: 'application/octet-stream';

    return response()->file($filePath, [
        'Content-Type' => $mimeType,
        'Cache-Control' => 'public, max-age=604800, immutable',
    ]);
})->where('path', '.*');

// SEO / GEO Sitemap for Search Engines & AI Crawlers
Route::get('/sitemap.xml', function () {
    $baseUrl = url('/');
    $lastMod = date('Y-m-d');
    $pages = [
        ['loc' => $baseUrl.'/', 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => $baseUrl.'/project', 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['loc' => $baseUrl.'/about', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => $baseUrl.'/skills', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => $baseUrl.'/certificate', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => $baseUrl.'/contact', 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['loc' => $baseUrl.'/guestbook', 'priority' => '0.6', 'changefreq' => 'daily'],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
    foreach ($pages as $p) {
        $xml .= "  <url>\n";
        $xml .= "    <loc>{$p['loc']}</loc>\n";
        $xml .= "    <lastmod>{$lastMod}</lastmod>\n";
        $xml .= "    <changefreq>{$p['changefreq']}</changefreq>\n";
        $xml .= "    <priority>{$p['priority']}</priority>\n";
        $xml .= "  </url>\n";
    }
    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
});
