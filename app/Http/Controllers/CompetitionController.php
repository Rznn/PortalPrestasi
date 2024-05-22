<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competition::all();
        return view('/admin/competition/index', [
            'competitions' => $competitions
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
}
