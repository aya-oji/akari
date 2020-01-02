<?php

namespace App\Http\Controllers\Contents;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index ()
    {
        return view('contents.news.index');
    }

    public function detail ()
    {
        return view('contents.news.detail');
    }
}
?>