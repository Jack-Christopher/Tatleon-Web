<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Help;

class ExternalHelpController extends Controller
{
    //
    public function index()
    {
        $help = Help::all()->sortBy('deadline');
        return view('external_help', compact('help'));
    }

    public function add_help_view()
    {
        return view('add_help');
    }

    public function add_help(Request $request)
    {
        $this->validate($request, [
            'help_description' => 'required',
            'contact_method' => 'required',
            'contact_info' => 'required',
            'deadline' => 'required|date',
        ]);

        $help = new Help;
        $help->is_offer = $request->help_type == 'offer' ? true : false;
        $help->description = $request->input('help_description');
        $help->deadline = $request->input('deadline');
        $help->contact_method = $request->input('contact_method');
        $help->contact_info = $request->input('contact_info');
        $help->save();

        return redirect()->back()->with('success', 'Ayuda registrada exitosamente');
    }
}
