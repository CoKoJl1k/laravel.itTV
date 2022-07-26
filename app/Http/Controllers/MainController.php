<?php

namespace App\Http\Controllers;

use App\Models\Board;


class MainController extends Controller
{
    public function index()
    {
        $boards = Board::with('columns','tasks')->get();
        return view('board.index')->with('boards', $boards);
    }
}
