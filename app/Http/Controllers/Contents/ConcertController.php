<?php

namespace App\Http\Controllers\Contents;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConcertController extends Controller
{
    public function index ()
    {
        return view('contents.concert.index');
    }

    public function detail ()
    {
        return view('contents.concert.detail');
    }
}
