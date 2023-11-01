<?php

namespace App\Http\Controllers;

use Whoops\Run;
use App\Models\Ahli;
use App\Models\User;
use App\Models\Rumah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class rumahController extends Controller
{
    public function view(){
        $record = Rumah::where('kir_id', auth()->user()->id)->first();
        return view('rumah/rumah',compact('record'));
    }

    public function update(Request $request){
        try{
            $validatedData = $request->validate([
                'no_rumah' => 'required|max:100',
                'jalan' => 'required|max:100',
            ]);
        
            // Check if the record exists
            $existingRecord = Rumah::where('kir_id', auth()->user()->id)->first();
        
            if ($existingRecord) {
                // Update the existing record
                $existingRecord->update([
                    'no_rumah' => $validatedData['no_rumah'],
                    'jalan' => $validatedData['jalan'],
                ]);
            } else {
                // Insert a new record
                $newRecordId = DB::table('rumahs')->insertGetId([
                    'no_rumah' => $validatedData['no_rumah'],
                    'jalan' => $validatedData['jalan'],
                    'kir_id' => auth()->user()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                Ahli::where('kir_id', auth()->user()->id)->update(['rumah_id' => $newRecordId ]);
            }
            return redirect('/rumah')->with('success', 'Update Successful!');
            
        }catch (ValidationException $e) {
            // Handle validation errors here
            return redirect()->back()->withErrors($e->validator->errors());
        }catch (\Exception $e) {
            $errorCode = $e->getCode();
            $errorMessage = $e->getMessage();
            if($errorCode == '23505'){
                return redirect('/rumah')->withErrors(['msg' => 'Duplicate Record Detected!']);
            }
            // Handle other exceptions (e.g., database errors) here
            return redirect('/rumah')->withErrors(['msg' => $errorMessage]);
        }
    }
}
