<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function changePasswordPage()
    {
        return view('auth.change_password');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect("/")->withSuccess('Signed in');
        }
        
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function registerAction(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        try {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
    
            return redirect(route('login'))
                ->withSuccess("Daftar berhasil");
                
        } catch(\Exception $e) {
            return redirect()->back()->withError('Daftar gagal');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function changeProfile(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,id,' . Auth::id(),
            'name' => 'required',
        ]);

        try {

            $user = User::find(Auth::id());
            $user->update([
                'email' => $request->email,
                'name' => $request->name,
            ]);
    
            return redirect(route('profile'))
                ->withSuccess("Data berhasil diubah");
                
        } catch(\Exception $e) {
            return redirect()->back()->withError('Data gagal diubah');
        }
    }

    public function changePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => ['required' , new MatchOldPassword],
            'new_password' => 'required',
            'new_confirm_password' => 'required|same:new_password',
        ]);

        try {

            $user = User::find(Auth::id());
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);
    
            return redirect(route('profile'))
                ->withSuccess("Password berhasil diubah");
                
        } catch(\Exception $e) {
            return redirect()->back()->withError('Password gagal diubah');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
