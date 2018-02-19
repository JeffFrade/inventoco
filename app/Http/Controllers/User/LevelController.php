<?php

namespace InvOco\Http\Controllers\User;

use Illuminate\Http\Request;
use InvOco\Http\Controllers\Controller;
use InvOco\Repositories\Models\Level;

class LevelController extends Controller
{
    public function index()
    {
        $level = new Level();
        $levels = Level::all();

        return view('user.level.level', compact('levels', 'level'));
    }
}
