<?php

namespace App\Http\Controllers;

use App\Models\Ahli;
use App\Models\Rumah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Whoops\Run;

class rumahController extends Controller
{
    public function view(){
        $record = Rumah::where('kir_id', auth()->user()->id)->first();
        return view('rumah/rumah',compact('record'));
    }

    public function edit(){
        $record = Rumah::where('kir_id', auth()->user()->id)->first();
        return view('rumah/editRumah',compact('record'));
    }

    public function update(Request $request){
        // Check if the record exists
        $existingRecord = Rumah::where('kir_id', auth()->user()->id)->first();

        if ($existingRecord) {
            // Update the existing record
            Rumah::where('kir_id', auth()->user()->id)
                ->update([
                    'no_rumah' => $request->no_rumah,
                    'jalan' => $request->jalan,
                    'updated_at' => now(),
                ]);
        } 
        else {
            // Insert a new record
            $newRecordId = DB::table('rumahs')->insertGetId([
                'no_rumah' => $request->no_rumah,
                'jalan' => $request->jalan,
                'kir_id' => auth()->user()->id,
            ]);

            Ahli::where('kir_id', auth()->user()->id)->update(['rumah_id' => $newRecordId ]);
        }
        return redirect('/rumah')->with('success', 'Update Successful!');
    }
}
