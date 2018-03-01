<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class GameController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $level = $user->level;

        // Array of which page is to be displayed for the corresponding level of the user
        $levelsList = array(
            0 => 'levels.blocked',
            1 => 'levels.level1',
            2 => 'levels.lev2',
            3 => 'levels.lev3',
            4 => 'levels.lev4',
            5 => 'levels.lev5',
            6 => 'levels.lev6',
            7 => 'levels.lev7',
            8 => 'levels.lev8',
            9 => 'levels.lev9',
            10 => 'levels.lev10',
            11=> 'levels.lev11',
            12 => 'levels.lev12',
             13 => 'levels.lev13',
             14 => 'levels.lev14',
              15 => 'levels.lev15',
              16=> 'levels.staytuned',

        );

        $currentLevel = $levelsList[$level];
        return view($currentLevel)->with('user',$user);
    }

    public function pill(){
        $user = Auth::user();
        if($user->level == 1)
            return view('levels.redpill')->with('user',$user);
        else
            return redirect('/game');
    }

    public function teaser(){
        return view('levels.wrong');
    }

    public function answer(Request $request) //Function to check answer
    {
        # code...
        $user = Auth::user();
        $answer = $request->input('answer');
        $answerList = array( //Array of answers
            1 => 'ieeemedalofhonor',
            2 => 'eureka',
            3 => 'elonreevemusk',
            4 => 'nikolatesla',
            5 => 'michaelfaraday',
            6 => 'alphago',
            7 => 'aquaregia',
            8 => 'robertkoch',
            9 => 'gracehopper',
            10 => 'adalovelace',
            11 => 'alexanderfleming',
            12 => 'alanturing',
            13 => 'leonardodavinci',
             14 => 'benjaminfranklin',
             15 => 'edgarfrankcodd',
            
        );
        $level = $user->level;
        $correctAns = $answerList[$level];
        if(stripos($answer,$correctAns) !== false){
            $user->level += 1;
            $num = User::where('level',$user->level)->count();
            if($num <= 4) // Ignore this portion
                $user->points += 500;
            else if($num <= 9)
                $user->points += 300;
            else if($num <= 19)             
                $user->points += 150;
            else
                $user->points += 75;
            $user->save();
            return redirect('/game');
        }
        else
            return view('levels.wrong'); // view to be shown if answer is wrong
    }

    
}
