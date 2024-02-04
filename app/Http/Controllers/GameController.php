<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return response()->json($games);
    }

    public function store(Request $request)
    {
        $game = new Game;
        $game->name = $request->name;
        // for now keep like this
        $game->save();
        return response()->json([
            "message" => "Game added"
        ], 201);
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        return response()->json($game);
    }

    public function update()
    {
        $game = Game::findOrFail($id);
        $game->update($request->all());
        return response()->json($game, 200);
    }
}


