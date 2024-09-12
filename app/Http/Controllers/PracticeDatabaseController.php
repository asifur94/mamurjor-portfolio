<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PracticeDatabaseController extends Controller
{
    public function expertiselist(){


        $expertiselist =  DB::select('select * from expertise');
        return view('admin.expertise.list',compact('expertiselist'));

    }


    public function heroform(){


        return view('admin.expertise.form');

    }

}
