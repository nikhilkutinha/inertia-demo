<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller;
use Inertia\Inertia;

class UserController extends Controller
{
    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'max:100'],
        ]);
        return Redirect::route('users')->with('success', 'User created.');
    }
}
