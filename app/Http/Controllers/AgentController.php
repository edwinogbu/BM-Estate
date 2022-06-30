<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::all();
        $properties = Property::all();
        // $contact = Contact::all();
        return view('layouts.dashboard.backend.agent.index', compact('properties','agents'));
    }

    public function allAgent()
    {
        $agents = Agent::latest()->simplePaginate(2);
        $properties = Property::all();
        // $contact = Contact::all();
        return view('agents', compact('properties','agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $properties = Property::all();

        return view('layouts.dashboard.backend.agent.create', compact('properties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAgentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $path = $request->file('image')->store('public/agent_images');

        $agent = new Agent();
        $agent->full_name = $request->full_name;
        $agent->phone = $request->phone;
        $agent->email = $request->email;
        $agent->about = $request->about;
        $agent->image = $path;
        $agent->save();

        return redirect()->route('agent.index')->with('successMessage', 'Saved successfully');
        // return redirect('/home/agents')->with('successMessage', 'Saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        $agent      = Agent::findOrFail($agent->id);
        $properties = Property::all();

        return view('layouts.dashboard.backend.agent.show', compact("agent","properties"));

    }


    public function singleAgent(Request $request, Agent $agent)
    {
        $agent      = Agent::find($agent->id);
        $properties = Property::all();

        $types = DB::table('properties')->select('type')->distinct()->get()->pluck('type')->sort();
        $cities = DB::table('properties')->select('city')->distinct()->get()->pluck('city')->sort();
        $beds = DB::table('properties')->select('beds')->distinct()->get()->pluck('beds')->sort();
        $garages = DB::table('properties')->select('garage')->distinct()->get()->pluck('garage')->sort();
        $baths = DB::table('properties')->select('baths')->distinct()->get()->pluck('baths')->sort();

        $searchProperty = Property::query();

        if($request->filled('type')){$searchProperty->where('type', $request->type);}
        if($request->filled('city')){$searchProperty->where('city', $request->city);}
        if($request->filled('beds')){$searchProperty->where('beds', $request->beds);}
        if($request->filled('garage')){$searchProperty->where('garage', $request->garage);}
        if($request->filled('baths')){$searchProperty->where('baths', $request->baths);}

        return view('single-agent', compact("agent","properties", 'cities','beds', 'baths', 'garages','types','searchProperty'));
    }


    public function ViewFrontendSingleProperty(Agent $agent)
    {
        // $languages  = $this->languageRepository->all();
        // $contact    = $this->contactRepository->all();
        $agent      = Agent::find($agent->id);
        $properties = Property::all();

        return view('single-agent', compact('agent','properties'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgentRequest  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentRequest $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
    }


    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
