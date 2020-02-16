<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;
// using the model Plans
use App\Plans;

class PlansController extends Controller
{
    public function show() {

        // get all plans in the database
        $plans = Plans::get();

        // get  specific plan
        // $plans = Plans::where('id', $id)->first();

        // old fashion way to do it as well
        // $plans = \DB::table('plans')->where('id', $id)->first();
       // dd($plans);
        return view('/plans/plans', [
            'plans' => $plans
        ]);
    }
}
