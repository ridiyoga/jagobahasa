<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function listcourses()
    {
        $courses = Courses::get();
        return $courses;
    }
    public function coursespost(Request $request)
    {
        $coursespost = Courses::create([
            'tittle'    => $request->tittle,
            'description'    => $request->description,
            'level'    => $request->level,
            'program'    => $request->program,
            'thumbnail'    => $request->thumbnail,
            'instructor_id'    => $request->instructor_id,
            'create_at'    => date('Y-m-d H:i:s'),
            'id_users'    => $request->id_users,
            'status'    => $request->status
        ]);
        if ($coursespost) {
            return array(
                'message' => "Data Berhasil Dimasukkan",
                'success' => true
            );
        } else {
            return array(
                'message' => "Data Gagal Dimasukkan",
                'success' => false
            );
        }
    }
    public function coursesupdate(Request $request)
    {
        $coursespost = Courses::where('id', $request->id)->update([
            'tittle'    => $request->tittle,
            'description'    => $request->description,
            'level'    => $request->level,
            'program'    => $request->program,
            'thumbnail'    => $request->thumbnail,
            'instructor_id'    => $request->instructor_id,
            'updated_at'    => date('Y-m-d H:i:s'),
            'id_users'    => $request->id_users
        ]);
        if ($coursespost) {
            return array(
                'message' => "Data Berhasil Diupdate",
                'success' => true
            );
        } else {
            return array(
                'message' => "Data Gagal Diupdate",
                'success' => false
            );
        }
    }
    public function coursesdelete(Request $request)
    {
        $coursespost = Courses::where('id', $request->id)->update([
            'status'    => $request->status,
            'updated_at'    => $request->updated_at
        ]);
        if ($coursespost) {
            return array(
                'message' => "Data Berhasil Dihapus",
                'success' => true
            );
        } else {
            return array(
                'message' => "Data Gagal Dihapus",
                'success' => false
            );
        }
    }
}
