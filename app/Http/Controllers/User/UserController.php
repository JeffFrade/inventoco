<?php

namespace InvOco\Http\Controllers\User;

use Illuminate\Http\Request;
use InvOco\Http\Controllers\Controller;
use InvOco\Level;
use InvOco\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $user = User::getUser();

        return view('user.user_index', compact('users', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::getUser();
        $users = new User();
        $levels = Level::all();

        return view('user.user_create', compact('user', 'users', 'levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->_validate($request);
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        $user = User::getUser();
        $users = User::all();
        
        return view ('user.user_index', compact('user', 'users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
