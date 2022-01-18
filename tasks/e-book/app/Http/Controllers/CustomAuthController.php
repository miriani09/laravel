<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'mail' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('mail', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }


    public function customUpdate(Request $request){
        $user = Auth::user();
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mail' => 'required|email|unique:users,mail,'.$user->id,
            'phone' => 'required',
        ]);

        $data = $request->all();
        $user->update($data);
        return redirect("useredit")->withSuccess('You have updated successfully');
    }

    public function userEdit(){

        return view('auth.useredit',['user' => Auth::user()]);
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'password' => 'required|min:6',
            'mail' => 'required|email|unique:users',
            'phone' => 'required',
        ]);

        $data = $request->all();
        $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'password' => Hash::make($data['password']),
            'mail' => $data['mail'],
            'phone' => $data['phone'],
        ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
            $user = Auth::user();

            return view('auth.dashboard',['user' => $user]);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
