<?php

namespace Iamopk\LaravelPackageExample\Http\Controllers;

use Illuminate\Routing\Controller;

class MyController extends Controller
{
    public function index()
    {
        return view('package-example::mytemplate');
    }
}
