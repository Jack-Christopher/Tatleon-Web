<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;


class TeacherRecordController extends Controller
{
    //
    public function index()
    {
        $teachers = User::where('user_type', 1)->get();

        // make an array of all the teachers with their respective comments
        $data = [];
        foreach ($teachers as $teacher) {
            $teacher_comments = Comment::where('teacher_id', $teacher->id)->get();
            $data[] = [
                'teacher' => $teacher,
                'comments' => $teacher_comments
            ];
        }

        return view('teacher_record', compact('data'));
    }

    public function add_teacher(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $teacher = new User();
        $teacher->first_name = $request->input('first_name');
        $teacher->last_name = $request->input('last_name');
        $teacher->email =  $teacher->first_name . '.' . $teacher->last_name . "@unsa";
        $teacher->password = ".";
        $teacher->user_type = 1;
        $teacher->save();

        return redirect()->back()->with('success', 'Docente agregado exitosamente');
    }
}
