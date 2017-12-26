<?php

namespace InvOco\Http\Controllers\User;

use Illuminate\Http\Request;
use InvOco\Http\Controllers\Controller;
use InvOco\Level;
use InvOco\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.user_index', compact('users'));
    }

    public function create()
    {
        $user = new User();
        $levels = Level::all();

        return view('user.user_create', compact( 'user', 'levels'));
    }

    public function store(Request $request)
    {
        $data = $this->_validate($request);
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        $users = User::all();

        return view ('user.user_index', compact( 'users'));
    }

    public function show($id)
    {
        $users = User::find($id);

        return view('user.user_show', compact('users'));
    }

    public function edit(User $user)
    {
        $levels = Level::all();

        return view('user.user_edit', compact('user', 'levels'));
    }

    public function update(Request $request, User $user)
    {
        $data = $this->_validate($request);
        $data['password'] = bcrypt($data['password']);

        $user->fill($data);
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('user.index');
    }

    protected function _validate(Request $request)
    {
        $user = $request->route('user');
        $userId = $user instanceof User?$user->user:null;
        // Criando as validações:
        $rules = [
            'user' => 'required|max:191|unique:user',
            'name' => 'required|max:100',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'id_level' => 'required',
        ];

        return $this->validate($request, $rules);
    }
}
