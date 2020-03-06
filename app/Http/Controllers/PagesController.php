<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to SEENAU!';
        return view('pages.index')->with('title', $title);
    }

    public function list() {
        $title = 'List';
        return view('pages.list')->with('title', $title);
    }

    public function upload() {
        $title = 'Upload';
        return view('pages.upload')->with('title', $title);
    }
}
