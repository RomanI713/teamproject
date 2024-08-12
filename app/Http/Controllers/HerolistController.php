<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HerolistController;

class HerolistController extends Controller
{
   public function expertiselist(){

       $expertiselist = DB::select('select * from expertise');

        return view('admin.hero.list',compact('expertiselist'));
   }

   public function heroform(){
        return view('admin.expertise.form');
   }
}
