<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Agent;
use App\Models\Contact;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\Service;
use App\Models\Team;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutMb = About::paginate(10);

        return view('layouts.dashboard.backend.about.index', compact('aboutMb'));
    }

    public function about(About $about, Request $request, Agent $agent)
    {
        $about = About::latest()->get();
        $agents = Agent::paginate(3);

        $properties = Property::all();
        $contact = Contact::all();
        $services = Service::all();
        $teams =Team::all();


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


    return view('about', compact('agents','about','teams','agent','properties','cities','beds', 'baths', 'garages','types','searchProperty','contact','services'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $path1 = $request->file('team_image')->store('public/about-image/team_image');
        $path2 = $request->file('company_image')->store('public/about-image/company_image');
        // $path3 = $request->file('horizontal_image')->store('public/about-image/horizontal_image');

        $about = new About();
        $about->title = $request->title ;
        $about->subtitle = $request->subtitle ;
        $about->text = $request->text ;
        $about->team_image = $path1;
        $about->company_image = $path2;
        // $about->vertical_image = $path3;
        $about->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $about = About::findOrFail($about->id);

        return view('layouts.dashboard.backend.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutRequest  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        if ($request->has('team_image')) {
            $path1 = $request->file('team_image')->store('public/about-images');
            $path2 = $request->file('horizontal_image')->store('public/about-images');
            $path3 = $request->file('vertical_image')->store('public/about-images');

        }
        $about->title = $request->title ;
        $about->subtitle = $request->subtitle ;
        $about->text = $request->text ;
        $about->team_image = $path1;
        $about->horizontal_image = $path2;
        $about->vertical_image = $path3;
        $about->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->back()->with('success', 'data deleted successfully');
    }
}
