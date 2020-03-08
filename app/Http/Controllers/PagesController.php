<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to SEENAU!';
        return view('pages.index')->with('title', $title);
    }

    public function list()
    {
        $title = 'List';
        return view('pages.list')->with('title', $title);
    }

    public function upload()
    {
        $title = 'Upload';
        return view('pages.upload')->with('title', $title);
    }
    public function verification()
    {
        $title = 'Verification';
        return view('pages.verification')->with('title', $title);
    }

    public function signupDeprecated()
    {
        $title = 'Sign Up';
        return view('pages.signup-deprecated')->with('title', $title);
    }

    public function loginDeprecated()
    {
        $title = 'Login';
        return view('pages.login-deprecated')->with('title', $title);
    }

    public function preview()
    {
        $title = 'Preview';
        $topics = DB::table('topics')->get();
        return view('pages.preview', ['topics' => $topics])->with('title', $title);
    }
}