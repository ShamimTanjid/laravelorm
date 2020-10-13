<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Lcass;
class LcassController extends Controller
{
    public function Index(){
        $sindx=Lcass::all();
            return response()->json($sindx);
    }
}
