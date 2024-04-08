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
            'description' => 'Find out more about $COOPS on base, a leading meme coin on the base Blockchain for we are all Bob. I am Bob. You are Bob. We are all Bob.',
            'canonical' => route('about'),
            'ogimage' => $image === null ? url('img/og-coops.png') : $image,
        ]);
    }
}