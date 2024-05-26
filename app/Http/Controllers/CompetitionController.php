<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Winner;
use App\Models\Competition;
use Illuminate\Http\Request;
use App\Models\CompetitionParticipant;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competition::all();
        $winner = Winner::all();
        //  $competitions = Competition::with('competition_participants')->get();
        //  $countParticipants = $participants->count();

        return view('/admin/competition/index', [
            'competitions' => $competitions,
        ]);
    }

    public function create()
    {
        return view('/admin/competition/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'organizer' => 'required',
            'description' => 'required',
            'rules' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            'start_registration' => 'required',
            'end_registration' => 'required',
            'start_competition' => 'required',
            'end_competition' => 'required',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file('image')->storeAs('competition-images', $imageName);

        $competition = new Competition();
        $competition->name = $request->name;
        $competition->organizer = $request->organizer;
        $competition->description = $request->description;
        $competition->rules = $request->rules;
        $competition->image = $imageName;
        $competition->start_registration = $request->start_registration;
        $competition->end_registration = $request->end_registration;
        $competition->start_competition = $request->start_competition;
        $competition->end_competition = $request->end_competition;
        $competition->save();

        return redirect('/admin/competition/index');
    }

    public function detail($id)
    {
        $competitions = Competition::findOrFail($id);
        return view('/admin/competition/details', [
            'competitions' => $competitions
        ]);
    }

    public function edit($id)
    {
        $competitions = Competition::findOrFail($id);
        return view('/admin/competition/edit', [
            'competitions' => $competitions
        ]);
    }

    public function update(Request $request, $id)
    {
        $competitions = Competition::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'organizer' => 'required',
            'description' => 'required',
            'rules' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp',
            'start_registration' => 'required',
            'end_registration' => 'required',
            'start_competition' => 'required',
            'end_competition' => 'required',
        ]);

        if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;

            Storage::delete('competition-images/'.$competitions->image);

            $request->file('image')->storeAs('competition-images', $newName);
            $request['image'] = $newName;
            $competitions->image = $newName;
        }

        $competitions->name = $request->name;
        $competitions->organizer = $request->organizer;
        $competitions->description = $request->description;
        $competitions->rules = $request->rules;
        $competitions->start_registration = $request->start_registration;
        $competitions->end_registration = $request->end_registration;
        $competitions->start_competition = $request->start_competition;
        $competitions->end_competition = $request->end_competition;
        $competitions->update();

        return redirect('/admin/competition/index');
    }

    public function delete($id)
    {
        $competitions = Competition::findOrFail($id);
        $competitions->delete();
        return redirect('/admin/competition/index');
    }

    public function changeRegistration($id)
    {
        $competitions = Competition::findOrFail($id);
        if ($competitions->status === 'registration' || $competitions->status === 'ongoing' || $competitions->status === 'finished') {
            return redirect('/bookings')->withErrors(['Error' => 'Your status cant be changed']);
        } else {
            $competitions->status = 'registration';
            $competitions->save();
        }
        return redirect('/admin/competition/index');
    }

    public function changeOngoing($id)
    {
        $competitions = Competition::findOrFail($id);
        if ($competitions->status === 'ongoing' || $competitions->status === 'finished' || $competitions->status === 'upcoming') {
            return redirect('/bookings')->withErrors(['Error' => 'Your status cant be changed']);
        } else {
            $competitions->status = 'ongoing';
            $competitions->save();
        }
        return redirect('/admin/competition/index');
    }

    public function changeFinished($id)
    {
        $competitions = Competition::findOrFail($id);
        if ($competitions->status === 'finished' || $competitions->status === 'upcoming' || $competitions->status === 'registration') {
            return redirect('/bookings')->withErrors(['Error' => 'Your status cant be changed']);
        } else {
            $competitions->status = 'finished';
            $competitions->save();
        }
        return redirect('/admin/competition/index');
    }

    public function winner($id)
    {
        $competitions = Competition::findOrFail($id);
        $participants = CompetitionParticipant::where('competition_id', $competitions->id)->get();
        $countParticipants = $participants->count();

        return view('/admin/competition/winner', [
            'participants' => $participants,
            'competitions' => $competitions,
            'countParticipants' => $countParticipants,
        ]);
    }

    public function selectwinner(Request $request, $id)
    {
        $competitions = Competition::findOrFail($id);
        $request->validate([
            'winner1' => 'required',
            'winner2' => 'required',
            'winner3' => 'required',
        ]);

        if ($request->winner1){
            $winners1 = new Winner();
            $winners1->competition_id = $competitions->id;
            $winners1->competition_participant_id = $request->winner1;
            $winners1->position = '1';
            $winners1->save();
        }

        if ($request->winner2){
            $winners2 = new Winner();
            $winners2->competition_id = $competitions->id;
            $winners2->competition_participant_id = $request->winner2;
            $winners2->position = '2';
            $winners2->save();
        }

        if ($request->winner3){
            $winners3 = new Winner();
            $winners3->competition_id = $competitions->id;
            $winners3->competition_participant_id = $request->winner3;
            $winners3->position = '3';
            $winners3->save();
        }

        return redirect('/admin/competition/index');
    }

}