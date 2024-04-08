<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-coops.png');

        return view('pages.about', [
            'title' => 'About $COOPS on base',
            'description' => '$COOPS on base is a meme coin about a jewish girl named coops who will not pay her dev & marketing team..',
            'canonical' => route('about'),
            'ogimage' => $image === null ? url('img/og-coops.png') : $image,
        ]);
    }
}