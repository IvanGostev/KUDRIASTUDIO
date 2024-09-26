<?php

use App\Models\Seo;

function seo()
{
    $seo = Seo::where('url', request()->path())->where('lang', session()->get('language') ?? 'en')->first();
    if ($seo) {
        return $seo;
    }
    return ['title' => 'KUDRYASTUDIO', 'description' => 'KUDRYASTUDIO', 'keywords' => 'KUDRYASTUDIO'];
}


function categoryTitle($category) {
    $language = session()->get('language') ?? 'en';
    return  match ($language) {
        'en' => $category->title,
        'ru' => $category->ru_title,
        'es' => $category->es_title,
    };
}
