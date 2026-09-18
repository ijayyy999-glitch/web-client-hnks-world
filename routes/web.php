<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.home'));
Route::get('/projects', fn () => view('pages.projects'));

Route::get('/projects/{slug}', function ($slug) {

    $data = [
        'obnoxious' => [
            'title' => 'Desain Kaos Obnoxious',
            'tech' => 'Design · Merchandise',
            'desc' => 'Desain grafis kaos streetwear dengan artwork custom bertema grafiti.',
            'gallery' => [
                ['image' => 'projects/kaos-obnoxious-2.jpg', 'label' => 'Desain Kaos Obnoxious (Detail)'],
                ['image' => 'projects/kaos-obnoxious-3.jpg', 'label' => 'Desain Kaos Obnoxious (Set)'],
                ['image' => 'projects/size-chart-boxy-2.jpg', 'label' => 'Size Chart Boxy T-Shirt'],
            ],
        ],
        'boxy-hijau' => [
            'title' => 'Desain Kaos Boxy Hijau',
            'tech' => 'Design · Merchandise',
            'desc' => 'Desain kaos boxy dengan aksen warna hijau dan tipografi bold.',
            'gallery' => [
                ['image' => 'projects/size-chart-boxy-1.jpg', 'label' => 'Size Chart Boxy T-Shirt'],
            ],
        ],
        'boxy-putih' => [
            'title' => 'Desain Kaos Boxy Putih',
            'tech' => 'Design · Merchandise',
            'desc' => 'Varian desain kaos boxy warna putih dengan artwork minimalis.',
            'gallery' => [
                ['image' => 'projects/size-chart-boxy-1.jpg', 'label' => 'Size Chart Boxy T-Shirt'],
            ],
        ],
    ];

    abort_unless(isset($data[$slug]), 404);

    return view('pages.project-detail', ['project' => $data[$slug]]);
});

Route::get('/about', fn () => view('pages.about'));
Route::get('/contact', fn () => view('pages.contact'));