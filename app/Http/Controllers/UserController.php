<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function signin()
    {
        return View("blog.signin");
    }

    public function signup()
    {
        return View("blog.signup");
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
           "first_name" => ['required', 'min:3'],
           "last_name" => ['required', 'min:3'],
           "name" => ['required', 'min:3'],
           "email" => ['required', 'email', Rule::unique('users', 'email') ],
           "password" => ['required', 'confirmed', 'min:6'],
        ]);

        $formFields['image']="";
        if($request->hasFile('image')){
            $formFields['image']=$request->file('image')->store('images', 'public');
            
        }

        $formFields["password"] = bcrypt($formFields["password"]);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect("/")->with("message", "User created and logged in");

    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have logged out sucessfully');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required'],
         ]);

         if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect("/")->with('message', "you are logged in now");
         }

         return back()->withErrors(['email' => "invaild credentials"]);
    }
}
