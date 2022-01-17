<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function index($teacher_id)
    {
        $teacher = User::find($teacher_id);
        if (!$teacher) {
            return redirect()->back()->with('error', 'Docente no encontrado');
        }
        return view('add_comment')->with('teacher', $teacher);
    }

    public function add_comment(Request $request)
    {
        $this->validate($request, [
            'teacher_id' => 'required|exists:users,id',
            'comment' => 'required',
        ]);

        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->teacher_id = $request->input('teacher_id');
        $comment->made_by = auth()->user()->id;
        $comment->save();

        return redirect()->back()->with('success', 'Comentario agregado exitosamente');
    }
}
