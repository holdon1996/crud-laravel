<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Debugbar;
use Illuminate\Support\Facades\Auth;

class Basic extends Controller
{
    public function show($id)
    {
        Debugbar::info('Hello');
        $user = Auth::user();
        $user->getAuthIdentifier();
        $user->getEmailForPasswordReset();
        $id = Auth::id();
//        Debugbar::info($user);
        return view('basic.index', ['id' => $id]);
    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        echo "This is invoke function";
    }

    public function get(Request $request)
    {
        $validated = $request->validate([
            'name' => 'bail|required',
            'title' => 'bail|required'
        ]);
        var_dump($validated);
        $a = $request->path();
        $b = $request->url();
        $c = $request->method();
        $d = $request->all();
        $e = $request->input('name');
        $f = $request->query('name');
        return response('I received a request from you. Thank you!', 200)->header('Content-Type', 'text/plain');
    }
}
