<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

public function delete(){
    $student = Student::where('id',2) ->first();
    $student->delete();
}
}




















// public function add()
//     {
//         $data = [
//             'name'=> "sumnth",
//             'email' =>'sumanth@gamil.com',
//             'phone' => '1234'
//         ];
//         db::table('students')->insert($data);
//     }
//     public function show(){
//         $all_students = DB::table('students')->get();
//         return view('show',compact('all_students'));
//     }
//     public function show_single($id){
//         $single_student = DB::table('students')->where('id',$id)->get();
//       return view('showsingle',compact('single_student'));
//     }
//     public function update(){
//         $data = [
//             "name"=>"Sumanth_katta"
//         ];
//         DB::table('students')->where('id',1)->update($data);
//     }
//     public function delete(){
//        DB::table('students')->where('id',5)->delete();
//     }
//     public function join(){
//      $result = DB::table('students')
//                 ->join('fees', 'students.id', '=', 'fees.student_id')
//                 -> select('fees.*', 'students.name')
//                 ->get();
//     // dd($result);
//     return view('join',compact('result'));
//     }