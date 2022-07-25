<?php

namespace App\Http\Controllers;

use App\Models\Board;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        $boards = Board::with('columns')->get();

        //$comments = Posts::find(1)->comments;
        // dd($board);

        return view('home')->with('boards', $boards);

       // return view('main',['boards'=>$boards, 'column'=>$columns ]);
    }
}
