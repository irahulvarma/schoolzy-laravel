<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Board;

class BoardController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth');
    }
    
    function addBoard()
    {
        return view('board.add');
    }

    function createBoard(Request $request)
    {
        $request->validate([
            'board_name' => 'required|alpha|max:255'
        ]);

        $board = new Board;
        $board->name = $request->input('board_name');
        $board->save();

        return redirect('add-board')->with('success', 'Board added successfully');
    }

    function listBoard()
    {
        $boards = Board::all();

        return view('board.list', ['boards' => $boards]);
    }

    function deleteBoard($id)
    {
        $board = Board::find($id);
        $board->delete();
        return redirect('board')->with('success', 'Board deleted successfully');
    }
}
