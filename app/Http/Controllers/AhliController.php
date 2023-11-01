<?php

namespace App\Http\Controllers;

use App\Models\Ahli;
use App\Models\Rumah;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AhliController extends Controller
{
    public function view(){
        //find rumah
        $rumah = DB::table('rumahs')
                        ->where('kir_id', auth()->user()->id)
                        ->select('id')
                        ->first();
        if ($rumah) {
            $record = Ahli::where('rumah_id', $rumah->id)->get();
            return view('AIR/senaraiAIR',compact('record'));
        } else {
            dd("No record found");
        }
    }

    public function store(Request $request){
        $rumah = DB::table('rumahs')
                    ->where('kir_id', auth()->user()->id)
                    ->select('id')
                    ->first();
        $ahli = new Ahli();
        $ahli->name = $request->nama;
        $ahli->ic = $request->ic;
        $ahli->jantina = $request->jantina;
        $ahli->telefon = $request->telefon;
        $ahli->email = $request->email;
        $ahli->hubungan = $request->hubungan;
        $ahli->dob = $request->dob;
        $ahli->rumah_id = $rumah->id;
        $ahli->kir_id = auth()->user()->id;
        $ahli->role = '2';
        // dd($ahli);
        $ahli->save();
        return redirect('/ahli')->with('success', 'Berjaya Disimpan!');
        // try{
        // }catch (Exception $e) {
        //     $errorCode = $e->getCode();
        //     if($errorCode == '23505'){
        //         return Redirect::back()->withErrors(['msg' => 'Duplicate IC']);
        //     }
        // }
    }

    public function edit(Request $request){
        $record = Ahli::find($request->id);
        return view('AIR/editAIR',compact('record'));
    }

    public function update(Request $request){
        //find if user
        $record = Ahli::find($request->id);
        if($record->role == 1){
            Ahli::where('id', $request->id)
                ->update([
                    'name' => $request->nama,
                    'ic' => $request->ic,
                    'jantina' => $request->jantina,
                    'telefon' => $request->telefon,
                    'email' => $request->email,
                    'hubungan' => $request->hubungan,
                    'dob' => $request->dob,
                ]);
            User::where('id', auth()->user()->id)
                ->update([
                    'name' => $request->nama,
                    'email' => $request->email,
                ]);
        }
        else{
            Ahli::where('id', $request->id)
            ->update([
                'name' => $request->nama,
                'ic' => $request->ic,
                'jantina' => $request->jantina,
                'telefon' => $request->telefon,
                'email' => $request->email,
                'hubungan' => $request->hubungan,
                'dob' => $request->dob,
            ]);
        }
        return redirect('/ahli')->with('success', 'Update Successful!');
    }
    
    public function destroy($id)
    {
        // Find the record to delete
        $record = Ahli::findOrFail($id);

        // Delete the record
        $record->delete();

        // Optionally, you can redirect to a success page or perform any additional actions
        return redirect('/ahli')->with('success', 'Record deleted successfully');
    }
}
