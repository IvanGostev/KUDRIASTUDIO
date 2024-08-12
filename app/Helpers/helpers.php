<?php

use App\Models\Seo;

function seo()
{
    $seo = Seo::where('url', request()->path())->first();
    if ($seo) {
        return $seo;
    }
    return ['title' => 'KUDRYASTUDIO', 'description' => 'KUDRYASTUDIO', 'keywords' => 'KUDRYASTUDIO'];
}
