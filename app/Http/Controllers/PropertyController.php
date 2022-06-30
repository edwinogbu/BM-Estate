<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Amenity;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Property;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Property $property,Agent $agent)
    {
        $agents =Agent::all();
        $amenities = Amenity::all();
        $properties = Property::all();
        // $properties = Property::latest()->with(['agent'])->paginate(3);

        return view('layouts.dashboard.backend.property.index', compact('agents', 'properties','agent', 'agents','amenities'));
    }

    public function search(Request $request, Property $property)
    {
        $search =$request->get('search');

        if ($search == 'active' ) {

            $properties = DB::table('properties')->where('status', 'like', '%'. $search.'%')->paginate(3);
        }
        elseif ($search == 'sold' ) {

            $properties = DB::table('properties')->where('status', 'like', '%'. $search.'%')->paginate(3);
        }

        else {
            $properties = Property::simplePaginate(5);


        }


        return view('properties',compact('properties', 'search'));
    }


    public function searchProperty(Request $request){

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

            return view('layouts.frontend.partials.form-search', compact('cities','beds', 'baths', 'garages','types','searchProperty'));
    }

    public function frontendHome(Agent $agent, Request $request, Testimonial $testimonial, Contact $contact, Service $service)
    {
        // dd('ok');
        $agents = Agent::paginate(3);
        $testimonials = Testimonial::all();
        $properties = Property::latest()->with(['agent'])->paginate(3);
        $contact = Contact::all();
        $services = Service::all();
        $featuredServices = Service::where('title', 'Accommodation Solution')->orWhere('title', 'Land Acquisition, Perfection of Title and Asset Disposal')->get();


// dd($featuredServices);

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


        return view('welcome', compact('services','service','agents','testimonials','testimonial', 'properties','agent','cities','beds', 'baths', 'garages','types','searchProperty', 'contact', 'featuredServices'));
    }

    public function SingleAgentProperty(Request $request, Agent $agent, Property $property)
    {
        $contact    = Contact::all();
        $agent      = Agent::all();
        $properties      = Property::all();
        $testimonials = Testimonial::all();
        $services = Service::all();



        $search =  $request->input('q');
        if($search!=""){
            $filters = Property::where(function ($query) use ($search){
                $query->where('type', 'like', '%'.$search.'%')
                ->orWhere('city', 'like', '%'.$search.'%')
                ->orWhere('beds', 'like', '%'.$search.'%')
                ->orWhere('garages', 'like', '%'.$search.'%')
                ->orWhere('baths', 'like', '%'.$search.'%');
            })
            ->paginate(1);
            $filters->appends(['q' => $search]);

        }
        else{
            $filters = Property::paginate(1);
        }



        return view('single-agent',compact('agent', 'properties','filters', 'property','services'));
    }

    public function PropertyListing(Request $request, Agent $agent)
    {

        $properties      = Property::latest()->simplePaginate(6);
        $contact = Contact::all();
        $services = Service::all();



        // $search =  $request->input('q');
        // if($search!=""){
        //     $filters = Property::where(function ($query) use ($search){
        //         $query->where('type', 'like', '%'.$search.'%')
        //         ->orWhere('city', 'like', '%'.$search.'%')
        //         ->orWhere('beds', 'like', '%'.$search.'%')
        //         ->orWhere('garages', 'like', '%'.$search.'%')
        //         ->orWhere('baths', 'like', '%'.$search.'%');
        //     })
        //     ->paginate(1);
        //     $filters->appends(['q' => $search]);

        // }
        // else{
        //     $filters = Property::paginate(1);
        // }



    $property = Property::where( function($query) use($request){
             return $request->status ? $query->from('properties')->where('status',$request->status) : '';
             }) ->get();

                $selected_status = [];
                $selected_status['status'] = $request->status;

                // dd($selected_status);

        return view('properties',compact('agent', 'properties', 'selected_status', 'contact','services'));
    }


    public function PropertyFilter(Request $request)
    {

        $properties      = Property::latest()->simplePaginate(6);
        $services = Service::all();

        $search =  $request->input('status');
        if($search!=""){
            $searchProperty = Property::where(function ($query) use ($search){
                $query->where('status', 'like', '%'.$search.'%');
            })
            ->simplePaginate(3);
            $searchProperty->appends(['status' => $search]);

        }
        else{
            $searchProperty = Property::simplePaginate(3);
        }



    // $property = Property::where( function($query) use($request){
    //          return $request->status ? $query->from('properties')->where('status',$request->status) : '';
    //          }) ->get();

    //             $selected_status = [];
    //             $selected_status['status'] = $request->status;

                // dd($selected_status);

        return view('properties',compact('properties','searchProperty', 'search','services'));
    }


    public function homePageProperty(Request $request, Agent $agent)
    {
        // $contact    = $this->contactRepository->all();
        $agent      = Agent::all();
        $properties      = Property::paginate(10);
        $testimonials = Testimonial::all();

        $search =  $request->input('q');
        if($search!=""){
            $filters = Property::where(function ($query) use ($search){
                $query->where('type', 'like', '%'.$search.'%')
                ->orWhere('city', 'like', '%'.$search.'%')
                ->orWhere('beds', 'like', '%'.$search.'%')
                ->orWhere('garages', 'like', '%'.$search.'%')
                ->orWhere('baths', 'like', '%'.$search.'%');
            })
            ->paginate(1);
            $filters->appends(['q' => $search]);

        }
        else{
            $filters = Property::paginate(1);
        }



        return view('properties',compact('agent', 'properties','filters'));
    }


    public function SingleProperty(Agent $agent, Property $property, Request $request)
    {
        // $languages  = $this->languageRepository->all();
        // $contact    = $this->contactRepository->all();
        $agents      = Agent::all();
        $testimonials = Testimonial::all();
        $services = Service::all();

        $id =Property::find($property->id);
        $properties = Property::where('id', $id)->get();


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


        return view('single-property', compact('agents','properties','cities','beds', 'baths', 'garages','types','searchProperty','property','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Property $property,Agent $agent)
    {
        $agents =Agent::all();
        $amenities = Amenity::all();
        // dd($property->agent_id);
        return view('layouts.dashboard.backend.property.create', compact('property','agents','amenities','agent'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePropertyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $property = Property::create($request->all());

            $path1 = $request->file('vertical_image')->store('public/vertical_image');
            $path2 = $request->file('horizontal_images')->store('public/horizontal_images');

            $propertyData = New property();
            $propertyData->city   = $request->city ;
            $propertyData->street_name   = $request->street_name ;
            $propertyData->house_number   = $request-> house_number;
            $propertyData->price   = $request->price ;
            $propertyData->area   = $request->area ;
            $propertyData->beds   = $request->beds ;
            $propertyData->baths   = $request->baths ;
            $propertyData->garage   = $request->garage ;
            $propertyData->rent   = $request-> rent;
            $propertyData->status   = $request-> status;
            $propertyData->type   = $request-> type;
            $propertyData->agent_id   = $request-> agent_id;
            $propertyData->about   = $request-> about;
            $propertyData->amenities   = $request-> amenities;
            $propertyData->vertical_image   = $path1;
            $propertyData->horizontal_images   = $path2;
            $propertyData->save();



          return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        return view('layouts.dashboard.backend.services.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $property = Property::findOrFail($property->id);
        $properties = Property::all();


        return view('layouts.dashboard.backend.property.edit', compact('property','properties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyRequest  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {

        $property = Property::findOrFail($property->id);

        $property->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property = Property::findOrFail($property->id);
        $property->delete();

        return back()->route('welcome')->with('success', 'successfully deleted');
    }
}
