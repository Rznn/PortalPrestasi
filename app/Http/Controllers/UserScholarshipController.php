<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ScholarshipParticipant;

class UserScholarshipController extends Controller
{
    public function index()
    {
        $scholarships = Scholarship::all();
        return view('/user/scholarship/index', [
            'scholarships' => $scholarships
        ]);
    }

    public function details($id)
    {
        $scholarships = Scholarship::findOrFail($id);
        return view('/user/scholarship/details', [
            'scholarships' => $scholarships
        ]);
    }

    public function registration($id)
    {
        $scholarships = Scholarship::findOrFail($id);
        $users = Auth::user();
        return view('/user/scholarship/registration', [
            'scholarships' => $scholarships,
            'users' => $users
        ]);
    }

    public function store(Request $request, $id)
    {
        $scholarships = Scholarship::findOrFail($id);
        $users = Auth::user();

        $request->validate([
            'fullname' => 'required',
            'nik' => 'required',
            'nim' => 'required',
            'instance' => 'required',
            'department' => 'required',
        ]);

        // Periksa apakah pengguna sudah terdaftar di kompetisi ini
        $exists = ScholarshipParticipant::where('user_id', $users->id)->where('scholarship_id', $scholarships->id)->exists();

        if ($exists) {
            return back()->withErrors(['error' => 'You have already registered for this scholarships.'])->withInput();
        }

        $scholarpars = new ScholarshipParticipant();
        $scholarpars->fullname = $request->fullname;
        $scholarpars->nik = $request->nik;
        $scholarpars->nim = $request->nim;
        $scholarpars->instance = $request->instance;
        $scholarpars->department = $request->department;
        $scholarpars->user_id = $users->id;
        $scholarpars->scholarship_id = $scholarships->id;
        $scholarpars->save();

        return redirect()->route('user.scholarship.index');
    }
}
