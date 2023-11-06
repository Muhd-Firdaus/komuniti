<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bil;
use App\Models\Rumah;
use Illuminate\Http\Request;

class BilController extends Controller
{
    public function view()
    {
        $rumah = Rumah::select('id')->where('kir_id', auth()->user()->id)->first();
        $record = Bil::where('rumah_id', $rumah->id)->orderBy('tarikh_bil', 'desc')->get();
        $currentbil = Bil::latest('id')->first();
        return view('bil/bil',compact('record', 'currentbil'));
    }

    public function viewbil(Request $request){
        $record = Bil::find($request->id);
        return $record;
    }
}
