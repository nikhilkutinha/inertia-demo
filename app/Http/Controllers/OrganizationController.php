<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller;
use Inertia\Inertia;

class OrganizationController extends Controller
{
    
    public function create()
    {
        return Inertia::render('Organizations/Create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'max:100'],
        ]);

        return Redirect::route('organizations')->with('success', 'Organization created.');
    }
}
