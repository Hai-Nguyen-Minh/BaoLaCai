<?php

namespace App\Http\Controllers;

use App\Models\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('pass');
        if(empty($username) && empty($password))
        {
            return view('login')->with('error1', 'Yeu cau nhap thong tin de dang nhap!!!');
        }
        else
        {
            $users = Users::where('username', $username);
            if ($users->count() == 1)
            {
                $pass = $users->where('password', $password)->count();
                if($pass == 1)
                {
                    $request->session()->put('login', true);
                    $request->session()->put('id_user');
                    $request->session()->put('username', $username);
                    return redirect('/');
                }
                else
                {
                    return view('login')->with('error2', 'Sai mat khau!!!');
                }
            }
            else
            {   
                return view('login')->with('error3', 'Tai khoan khong ton tai!!!');
            } 
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:6'
        ]); 
        if ($validator->failed())
        {
            return redirect('/login')->withErrors($validator)->withInput();
        }
        else
        {
            $username = $request->input('username');
            $email = $request->input('email');
            $password = $request->input('pass');
            if(empty($username) || empty($password) || empty($email))
            {
                return view('register')->with('fail1', 'Yeu cau nhap thong tin!!!');
            }
            else
            {
                $users = Users::select('username')->where('username', $username)->count();
                if($users == 0)
                {  
                    $user = new Users;
                    $user->username = $username;
                    $user->email = $email;
                    $user->password = $password;
                    $user->save();
                    $request->session()->put('login', true);
                    $request->session()->put('id_user');
                    $request->session()->put('username', $username);
                    return redirect('/');  
                }
                else
                {
                    return view('register')->with('fail2', 'Ten tai khoan da ton tai');
                } 
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function loginForm()
    {
        return view('login');
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
    public function changePassword(Request $request)
    {
        if ($request->session()->has('login') && $request->session()->get('login')==true)
        {
            $user = Users::find($request->session()->get('username'));
            $user->password = $request->input('password');
            $user->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
