<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WebsiteController;

class WebsiteController extends Controller
{
    public function FullWebsiteData(){

        return view('welcome');
    }
}
