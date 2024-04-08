<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function __invoke(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-coops.png');

        return view('pages.chart', [
            'title' => 'Chart for $COOPS on base',
            'description' => 'View the DexScreener chart for $COOPS on base. This is a meme coin about a jewish girl named coops who will not pay people..',
            'canonical' => route('chart'),
            'ogimage' => $image === null ? url('img/og-coops.png') : $image,
        ]);
    }
}