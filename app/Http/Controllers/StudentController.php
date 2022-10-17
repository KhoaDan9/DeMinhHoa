<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function get_all_student(){
        $all_data['students'] = DB::select('select * from student');
        return view('student_manage',$all_data);
    }

    public function get_student_by_id($id){
        $data['student'] = DB::select('select * from student where id =?',[$id]);
        return view('student_edit',$data);
    }

    public function update(){
        DB::update('update student set fullname = ?, birthday=?, Address=? where id=?',[$_POST['fullname'],$_POST['birthday'],$_POST['address'],$_POST['id']]);
        return redirect('/');
    }

    public function add(){
        DB::insert('insert into student (fullname, birthday,address) values (?, ?,?)', [$_POST['fullname'],$_POST['birthday'],$_POST['address']]);
        return redirect('/'); 
    }

    public function delete($id){
        DB::delete('delete from student where id = ?', [$id]);
        return redirect('/'); 

    }
}
