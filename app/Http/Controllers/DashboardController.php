<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    


    public function dashboard(){
        return view('dashboard');
    }
    public function empform(){
        return view ('admin.grade.form');
    }

    public function gradesave(Request $request){
        $full_name = $request->full_name;
        $email = $request->email;
        $cell = $request->cell;
        $voter_id_no = $request->voter_id_no;


        DB::insert("insert into employee (full_name, email, cell, voter_id_no) values ('$full_name','$email','$cell','$voter_id_no')");

       return redirect()->route('listofwebsitedata')->with('info','Data added successfully');


    }
    public function listofwebsitedata(){


        $employee =  DB::select('select * from employee');

        return view('admin.grade.list',compact('employee'));
        

    }



  

        // $employee = DB::select('select * from employee where id = ?', [1]);

        // $grade =  DB::insert("insert into grade (name, basic ) values ('Roman', 5000)");

        // $gradeupdate = DB::update('update grade set name = "EGO" where id = ?', ['4']);

        // $userdelete = DB::delete('delete from grade where id = ?', [5]);


        // $table = DB::table('grade')->get();

        // $table = DB::table('grade')->first();

        //$table = DB::table('grade')->where('id',4)->get();


    //    $allgrade = DB::table('grade')->insert(
    //         [
    //             'name'=>'Md',
    //             'basic'=>500000,
    //         ]
    //         );

    // $allgrade = DB::table('grade')->where('id',3)->update(['name'=>'Sabika']);

    // $allgrade = DB::table('grade')->where('id',3)->delete();

        // dd($allgrade);

    

}
