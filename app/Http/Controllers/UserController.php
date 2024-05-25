<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CompetitionParticipant;
use App\Models\ScholarshipParticipant;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('/user/dashboard');
    }

    public function activity()
    {
        $users = Auth::user();

        $competitionParticipants = CompetitionParticipant::where('user_id', $users->id)->with('competitions')->get();
        $competitions = $competitionParticipants->map(function ($participant) {
            return $participant->competitions;
        });

        $scholarshipParticipants = ScholarshipParticipant::where('user_id', $users->id)->with('scholarships')->get();
        $scholarships = $scholarshipParticipants->map(function ($participant) {
            return $participant->scholarships;
        });

        return view('/user/activity/index', [
            'competitions' => $competitions,
            'scholarships' => $scholarships,
        ]);
    }
}
