<?php

namespace App\Http\Controllers;

use App\Models\Ahli;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function profile()
    {
        $record = Ahli::where('kir_id', auth()->user()->id)->first();
        return view('profile/profile',compact('record'));
    }

    public function update(Request $request)
    {
        try {
            $user = User::findOrFail(auth()->user()->id);
            $validatedData = $request->validate([
                'email'      => 'required|max:100',
                'name'      => 'required|max:100',
                'ic'      => 'required|max:12',
                'phone'   => 'nullable|max:15|min:7',
            ]);          

            $user->update($validatedData);
                
            return redirect('/profile')->with('success', 'User Updated Successfully.');
        }catch (ValidationException $e) {
            // Handle validation errors here
            return redirect()->back()->withErrors($e->validator->errors());
        }catch (\Exception $e) {
            $errorCode = $e->getCode();
            if($errorCode == '23505'){
                return redirect('/profile')->withErrors(['msg' => 'Duplicate Record Detected!']);
            }
            // Handle other exceptions (e.g., database errors) here
            return redirect('/profile')->withErrors(['msg' => 'User Update Unsuccessful!']);
        }
    }
}
