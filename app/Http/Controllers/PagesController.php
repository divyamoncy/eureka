<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class PagesController extends Controller
{
    public function index()
    {
        # code...
        return view('pages.index');
    }

    public function leaderboard()
    {
        # code...
        $users = User::all()->orderBy('level','DESC')->orderBy('updated_at','ASC')->get();

        return view('pages.leaderboard')->with('users',$users);
    }

    public function rules()
    {
        return view('pages.rules');
    }
}
