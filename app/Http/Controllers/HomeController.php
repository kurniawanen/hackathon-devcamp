<?php

namespace App\Http\Controllers;

use App\Domain\Book\Repository\BookRepository;
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
     * @return \Illuminate\Http\Response
     */
    public function index(
        BookRepository $repo
    )
    {
        $data = $repo->readAll();
        return view('home',compact('data'));
    }
}
