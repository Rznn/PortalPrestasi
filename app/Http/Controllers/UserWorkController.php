<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class UserWorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('/user/work/index', [
            'works' => $works
        ]);
    }
}
