<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function __invoke(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-coops.png');

        return view('index', [
            'title' => '$COOPS on base',
            'description' => 'Find out more about $COOPS on base, a meme coin about a jewish girl who will not pay her dev or marketing team..',
            'canonical' => route('home'),
            'ogimage' => $image === null ? url('img/og-coops.png') : $image,
        ]);
    }
}