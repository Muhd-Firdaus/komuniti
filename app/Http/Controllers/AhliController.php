<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Ahli;
use App\Models\User;
use App\Models\Rumah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class AhliController extends Controller
{
    public function view(){
        //find rumah
        $rumah = DB::table('rumahs')
                        ->where('kir_id', auth()->user()->id)
                        ->select('id')
                        ->first();
        if ($rumah) {
            $record = Ahli::where('rumah_id', $rumah->id)->orderBy('created_at', 'asc')->get();
            return view('AIR/senaraiAIR',compact('record'));
        } else {
            return redirect('/rumah')->withErrors(['msg' => 'sila lengkapkan maklumat rumah terlebih dahulu!']);
        }
    }

    public function add(){
        //find rumah
        $rumah = DB::table('rumahs')
                        ->where('kir_id', auth()->user()->id)
                        ->select('id')
                        ->first();
        if ($rumah) {
            $record = Ahli::where('rumah_id', $rumah->id)->get();
            return view('AIR/tambahAIR');
        } else {
            return redirect('/rumah')->withErrors(['msg' => 'sila lengkapkan maklumat rumah terlebih dahulu!']);
        }
        return view('AIR/tambahAIR');
    }

    public function store(Request $request){
        try {
            $rumah = Rumah::where('kir_id', auth()->user()->id)->firstOrFail();
        
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'ic' => 'nullable|max:12',
                'jantina' => 'required|in:01,02',
                'telefon' => 'nullable|max:15|min:7',
                'email' => 'nullable|email|max:255',
                'hubungan' => 'required|in:01,02,03,04,05,06,07,08',
                'dob' => 'nullable',
            ]);
            $ahli = new Ahli();
            $ahli->name = $validatedData['name'];
            $ahli->ic = $validatedData['ic'];
            $ahli->jantina = $validatedData['jantina'];
            $ahli->telefon = $validatedData['telefon'];
            $ahli->email = $validatedData['email'];
            $ahli->hubungan = $validatedData['hubungan'];
            $ahli->dob = $validatedData['dob'];
            $ahli->rumah_id = $rumah->id;
            $ahli->save();
        
            return redirect('/senarai-ahli')->with('success', 'Record Successfully Stored!');
        } catch (ValidationException $e) {
            // Handle validation errors here
            return redirect()->back()->withErrors($e->validator->errors());
        } catch (\Exception $e) {
            $errorCode = $e->getCode();
            if ($errorCode == '23505') {
                return redirect('/senarai-ahli')->with('error', 'Duplicate Record Detected!');
            }
            // Handle other exceptions (e.g., database errors) here
            return redirect('/senarai-ahli')->with('error', 'Record Unsuccessfully Stored!');
        }        
    }

    public function edit(Request $request){
        $record = Ahli::find($request->id);
        return view('AIR/editAIR',compact('record'));
    }

    public function update(Request $request){
        try {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'ic' => 'nullable|max:12',
                'jantina' => 'required|in:01,02',
                'telefon' => 'nullable|max:15|min:7',
                'email' => 'nullable|email|max:255',
                'hubungan' => 'required|in:01,02,03,04,05,06,07,08',
                'dob' => 'nullable',
            ]);
        
            // Find the record
            $record = Ahli::find($request->id);
        
            // Check if the record has the role == 1
            if ($record->role == 1) {
                // Update the record
                Ahli::where('id', $request->id)
                    ->update($validatedData);
        
                // Also update the User model
                User::where('id', auth()->user()->id)
                    ->update([
                        'name' => $request->name,
                        'email' => $request->email,
                    ]);
            } else {
                // Update the record
                Ahli::where('id', $request->id)
                    ->update($validatedData);
            }
        
            return redirect('/senarai-ahli')->with('success', 'Update Successful!');
        } catch (ValidationException $e) {
            // Handle validation errors here
            return redirect()->back()->withErrors($e->validator->errors());
            return redirect('/senarai-ahli')->withErrors($e->validator->errors());
        } catch (\Exception $e) {
            $errorCode = $e->getCode();
            $errorMessage = $e->getMessage();
            dd($errorMessage);
            if ($errorCode == '23505') {
                return redirect('/senarai-ahli')->withErrors(['msg' => 'Duplicate Record Detected!']);
            }
            // Handle other exceptions (e.g., database errors) here
            return redirect('/senarai-ahli')->withErrors(['msg' => 'Update Unsuccessful!']);
        }        
    }
    
    public function destroy($id)
    {
        // Find the record to delete
        $record = Ahli::findOrFail($id);

        // Delete the record
        $record->delete();

        // Optionally, you can redirect to a success page or perform any additional actions
        return redirect('/senarai-ahli')->with('success', 'Record Deleted Successfully');
    }
}
