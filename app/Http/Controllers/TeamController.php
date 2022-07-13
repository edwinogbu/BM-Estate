<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Agent;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('layouts.dashboard.backend.team_member.index', compact('teams'));
    }

    public function TeamMember(Team $team, Agent $agent)
    {
        $team = Team::findOrFail($team->id);
        $services = Service::all();
        return view('team-member-detail', compact('team', 'services', 'agent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.backend.team_member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('team_member_image')->store('public/team_member_picture');
        $team = new Team();
        $team->team_member_title = $request->team_member_title;
        $team->team_member_name = $request->team_member_name;
        $team->team_member_position = $request->team_member_position;
        $team->team_member_qualification = $request->team_member_qualification;
        $team->team_member_bio = $request->team_member_bio;
        $team->team_member_certification = $request->team_member_certification;
        $team->team_member_award = $request->team_member_award;
        $team->team_member_seminar = $request->team_member_seminar;
        $team->team_member_image = $path;
        $team->save();

        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('layouts.dashboard.backend.team_member.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('layouts.dashboard.backend.team_member.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Team $team)
    {
        if ($request->hasFile('team_member_image')) {
            // $request->validate([

            //     'icon'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // ]);

            $path = $request->file('team_member_image')->store('public/team_member_picture');
            $team->team_member_image = $path;
        }

        $team->team_member_title = $request->team_member_title;
        $team->team_member_name = $request->team_member_name;
        $team->team_member_position = $request->team_member_position;
        $team->team_member_qualification = $request->team_member_qualification;
        $team->team_member_bio = $request->team_member_bio;
        $team->team_member_certification = $request->team_member_certification;
        $team->team_member_award = $request->team_member_award;
        $team->team_member_seminar = $request->team_member_seminar;
        $team->save();

        return redirect()->route('team.index')->with('success', 'Team Member Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->back();
    }
}
