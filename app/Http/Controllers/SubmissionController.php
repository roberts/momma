<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
        'base'  => 'required',
        'handle' => 'required'
        ]);

        // Twitter handles are no longer than 15 characters, but need to trim for people putting in @ sign and https://x.com/ etc

        //  Store submission in database
        Submission::create($request->all());
        return redirect(route('confirmation'))->with( ['base' => $request->base, 'handle' => $request->handle] );
    }

    public function confirmation(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-coops.png');

        return view('pages.submissions.confirmation', [
            'title' => '$COOPS Submission',
            'description' => 'Find out more about $COOPS on base, a leading meme coin on the base Blockchain for we are all Bob. I am Bob. You are Bob. We are all Bob.',
            'canonical' => route('confirmation'),
            'ogimage' => url('img/og-coops.png'),
            'base' => session('base') === null ? 'base-Address-Here' : session('base'),
            'handle' => session('handle') === null ? '@DrewRoberts' : '@'.session('handle'),
            'xlink' => session('handle') === null ? 'https://x.com/DrewRoberts' : 'https://x.com/'.session('handle'),
        ]);
    }

    public function show(Submission $submission)
    {
        //
    }

    public function edit(Submission $submission)
    {
        //
    }

    public function update(Request $request, Submission $submission)
    {
        //
    }

    public function destroy(Submission $submission)
    {
        //
    }
}
