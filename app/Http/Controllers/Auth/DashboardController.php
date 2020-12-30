<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index() {

        // dd(auth()->user()->posts);

        return view('dashboard');
    }
}
