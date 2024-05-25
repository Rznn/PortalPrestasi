<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\CompetitionParticipant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competition::all();
        return view('/user/competition/index', [
            'competitions' => $competitions
        ]);
    }

    public function details($id)
    {
        $competitions = Competition::findOrFail($id);
        return view('/user/competition/details', [
            'competitions' => $competitions
        ]);
    }

    public function registration($id)
    {
        $competitions = Competition::findOrFail($id);
        $users = Auth::user();
        return view('/user/competition/registration', [
            'competitions' => $competitions,
            'users' => $users
        ]);
    }

    public function store(Request $request, $id)
    {
        $competitions = Competition::findOrFail($id);
        $users = Auth::user();

        $request->validate([
            'fullname' => 'required',
            'nik' => 'required',
            'nim' => 'required',
            'instance' => 'required',
            'department' => 'required',
        ]);

        // Periksa apakah pengguna sudah terdaftar di kompetisi ini
        $exists = CompetitionParticipant::where('user_id', $users->id)->where('competition_id', $competitions->id)->exists();

        if ($exists) {
            return back()->withErrors(['error' => 'You have already registered for this competition.'])->withInput();
        }

        $compars = new CompetitionParticipant();
        $compars->fullname = $request->fullname;
        $compars->nik = $request->nik;
        $compars->nim = $request->nim;
        $compars->instance = $request->instance;
        $compars->department = $request->department;
        $compars->user_id = $users->id;
        $compars->competition_id = $competitions->id;
        $compars->save();

        return redirect()->route('user.competition.index');
    }
}
