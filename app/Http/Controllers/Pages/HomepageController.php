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
        $image = url('img/og-bob.png');

        return view('index', [
            'title' => '$COOPS on base',
            'description' => 'Find out more about $COOPS on base, a leading meme coin on the base Bloackchain for we are all Bob. I am Bob. You are Bob. We are all Bob.',
            'canonical' => route('home'),
            'ogimage' => $image === null ? url('img/og-bob.png') : $image,
        ]);
    }
}