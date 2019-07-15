<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('pages.user.home', compact('blogs'));
    }

     public function show($id)
    {
        $blogs = Blog::find($id);
        return view('pages.user.home', compact('blogs'));
    }
}
