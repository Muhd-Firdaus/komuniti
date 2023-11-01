<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Ahli;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class loginController extends Controller
{
    public function index()
    {
        return view('login/login',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required',
            'password' => 'required'
        ]);
        if(auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return Redirect::back()->withErrors(['msg' => 'You have entered an invalid email or password']);
    }

    public function store(Request $request)
    {
        try {
            $rules = [
                'email'      => 'bail|required|max:100',
                'nama'      => 'bail|required|max:100',
                'ic'      => 'bail|required|max:12',
                'password'   => 'bail|required|max:100|min:8',
               ];
                $this->validate($request, $rules);
                $user = new User();
                $user->email = $request->email;
                $user->name = $request->nama;
                $user->password = Hash::make($request->password);

                $user->save();
                //store in ahlis
                $ahli = new Ahli();
                $ahli->email = $request->email;
                $ahli->name = $request->nama;
                $ahli->hubungan = '01';
                $ahli->ic = $request->ic;
                // $ahli->jantina = $request->jantina;
                // $ahli->telefon = $request->telefon;
                $ahli->email = $request->email;
                // $ahli->hubungan = $request->hubungan;
                // $ahli->dob = $request->dob;
                $ahli->kir_id = $user->id;
                // $ahli->role = '1';
                $ahli->save();
                return redirect('/login');
        }catch (ValidationException $e) {
            // Handle validation errors here
            return redirect()->back()->withErrors($e->validator->errors());
        }catch (\Exception $e) {
            $errorCode = $e->getCode();
            if($errorCode == '23505'){
                return Redirect::back()->withErrors(['msg' => 'IC or email already registered!']);
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}