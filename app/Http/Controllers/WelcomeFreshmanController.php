<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Welcome;
use App\Models\School;


class WelcomeFreshmanController extends Controller
{
    //
    public function index()
    {
        $schools = School::all();
        $status = "search";
        return view('welcome_freshman', compact('schools', 'status'));
    }

    public function by_school(Request $request)
    {
        $school_id = $request->input('school');
        $school = School::where('id', $school_id)->get()->first();
        $temp = DB::table('welcome')->where('school_id', $school_id)->get()->first();
        $data = array();
        $data[] = array("Día de inicio", ($temp->start_date != null) ? ($temp->start_date) : ('No hay información disponible'));
        $data[] = array("Instrucciones",($temp->instructions != null) ? ($temp->instructions) : ('No hay información disponible'));
        $data[] = array("Enlace de Whatsapp",($temp->whatsapp_link != null) ? ($temp->whatsapp_link) : ('No hay información disponible'));
        $data[] = array("Enlace de Facebook",($temp->facebook_link != null) ? ($temp->facebook_link) : ('No hay información disponible'));

        $status = "watch";
        return view('welcome_freshman', compact('data', 'school', 'status'));
    }

    public function edit_view($id)
    {
        $school = School::where('id', $id)->get()->first();
        $welcome = Welcome::where('school_id', $id)->get()->first();
        return view('edit_welcome', compact('school', 'welcome'));
    }

    public function edit(Request $request)
    {
        $school_id = $request->input('school_id');
        $start_date = $request->input('start_date');
        $start_date = date('Y-m-d', strtotime($start_date));
        $instructions = $request->input('instructions');
        $whatsapp_link = $request->input('whatsapp_link');
        $facebook_link = $request->input('facebook_link');
        $secret_key = $request->input('secret_key');
        $auth_key = Welcome::where('school_id', $school_id)->pluck('auth_key')->first();

        if ($secret_key == $auth_key) {
            $welcome = Welcome::where('school_id', $school_id)->get()->first();
            $welcome->start_date = $start_date;
            $welcome->instructions = $instructions;
            $welcome->whatsapp_link = $whatsapp_link;
            $welcome->facebook_link = $facebook_link;
            $welcome->save();
            return redirect()->back()->with('success', 'Información actualizada correctamente');
        } else {
            return redirect()->back()->with('error', 'La clave de autenticación no es correcta');
        }
    }
}
