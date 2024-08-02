<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Stichoza\GoogleTranslate\Exceptions\LargeTextException;
use Symfony\Component\DomCrawler\Crawler;

Route::group(['middleware' => 'localisation:ar', 'prefix' => 'ar'], function () {
    include 'route.php';
});
Route::group(['middleware' => 'localisation:fa', 'prefix' => 'fa'], function () {
    include 'route.php';
});
Route::group(['middleware' => 'localisation:en', 'prefix' => 'en'], function () {
    include 'route.php';
});
Route::group(['middleware' => 'localisation'], function () {
    include 'route.php';
});



Route::get('/ai', function () {


    $apiKey = 'AIzaSyBrlefVHBqkXRpz319AnzhMcqLUL_nK9ek'; // کلید API خود را جایگزین کنید
    $text = \Stichoza\GoogleTranslate\GoogleTranslate::trans('سلام من حسین هستم اسم تو چی است؟', 'en');
    $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=' . $apiKey;

    $data = [
        'contents' => [
            [
                'parts' => [
                    [
                        'text' => $text,
                    ],
                ],
            ],
        ],
    ];

    $client = new Client();

    $response = $client->post($url, [
        'headers' => [
            'Content-Type' => 'application/json'],
        'json' => $data,
    ]);

    $responseBody = $response->getBody()->getContents();
    $responseArray = json_decode($responseBody, true);

    $first_text = $responseArray['candidates'][0]['content']['parts']['0']['text'];
    $translate = \Stichoza\GoogleTranslate\GoogleTranslate::trans($first_text, 'fa');
    return $translate;


});
Route::get('/gpt', function () {

    $apiKey = 'sk-proj-qL7R30vXMHww5cJSOlVJT3BlbkFJ0tFVMj7lO9SHElDfBfbY'; // کلید API خود را جایگزین کنید
    $text = 'سلام من حسین هستم اسم تو چی است؟';
    $url = 'https://api.openai.com/v1/chat/completions';
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        "Authorization" => "Bearer " . $apiKey
    ])
        ->post($url, [
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "user",
                    "content" => $text
                ]
            ],
            'temperature' => 0.5,
            'max_token' => 2000,
        ])
        ->json();

    return $response['choices'][0]['message']['content'];

});
//Route::get('crl', function () {
//    set_time_limit(0);
//    $posts = Post::get();
//
//    foreach ($posts as $post) {
//        \App\Jobs\GcorpPostJob::dispatch($post);
//    }
//    return "run translate";
//
//});
