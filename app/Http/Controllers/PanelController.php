<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class PanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('panel.dashboard');;
    }

    /**
     * block
     *
     * @return \Illuminate\Http\Response
     */
    private function block() {
        return redirect('/system');
    }

    /**
     * Show the user details.
     *
     * @return \Illuminate\Http\Response
     */
    public function details() {
        return view('panel.details');
    }

    /**
     * Show the user details.
     *
     * @return \Illuminate\Http\Response
     */
    public function details_update(Request $request) {
        $userId = Auth::id();
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $userId,
            'password' => 'required|min:6|confirmed',
        ]);

        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        if ($user->save()) {
            return redirect('/account/details')->with('status', 'Profil zaktualizowany!');
        } else {
            return redirect('/account/details')->with('status', 'Profil nie mógłbyć zaktualizowany!');
        }
    }

    public function users() {
        if (Auth::user()->profile < 2)
            return $this->block();
        $users = User::all();
        return view('panel.users')->with('users', $users);
    }

    public function user($osoba) {
        if (Auth::user()->profile < 2)
            return $this->block();

        $user = User::find($osoba);

        //return $user;
        return view('panel.user')->with('user', $user);
    }

    public function user_new(Request $request) {
        if (Auth::user()->profile < 2)
            return $this->block();

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'profile' => $request->profile,
                    'password' => bcrypt($request->password),
        ]);

        if ($user)
            session()->flash('msg', 'Dodano nowego użytkownika');
        else
            session()->flash('msg', 'Nie można było dodać użytkownika');

        return view('panel.user')->with('user', $user);
    }

    public function user_update(Request $request, $osoba) {
        $user = User::find($osoba);

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->profile = $request->input('profile');

        if ($user->save())
            session()->flash('msg', 'Zmieniono dane użytkownika');
        else
            session()->flash('msg', 'Nie można było zmienić danych użytkownika');

        return redirect('/system/account/users/' . $osoba);
    }

    public function user_delete($osoba) {
        $user = User::find($osoba);
        if ($user->profile != 2) {
            $user->delete();
            session()->flash('msg', 'Skasowano użytkownika');
            return redirect('/system/account/users/');
        } else {
            session()->flash('error', 'Nie można skasować tego użytkownika.');
            return redirect('/system/account/users/' . $osoba);
        }
    }

}
