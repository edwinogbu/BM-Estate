<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Property;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('layouts.dashboard.backend.services.index', compact('services'));
    }
    public function services()
    {
        $services = Service::all();
        $agents = Agent::all();
        $testimonials = Testimonial::all();
        $properties = Property::paginate(5);
        $contact = Contact::all();

        return view('services', compact('services', 'properties','agents','contact','testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $path = $request->file('icon')->store('public/service_image');

        $service = New Service();
        $service->icon   = $path;
        $service->title   = $request->title ;
        $service->text   = $request->text ;
        $service->save();

        return redirect()->route('services.index')->with('success', 'service created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {

        return view('layouts.dashboard.backend.services.show', compact('service'));
    }



    public function serviceDetail(Service $service)
    {

        $services = Service::all();
        $agents = Agent::all();
        $testimonials = Testimonial::all();
        $properties = Property::paginate(5);
        $contact = Contact::all();
        return view('service-detail', compact('service','services', 'properties','agents','contact','testimonials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $service = Service::findOrFail($service->id);

        return view('layouts.dashboard.backend.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        if ($request->hasFile('icon')) {
            $request->validate([

                'icon'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('icon')->store('public/service_image');

            $service->icon   = $path;
        }
        $service->title   = $request->title ;
        $service->text   = $request->text ;
        $service->save();

        return redirect()->route('services.index')->with('success', 'services updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->back()->with('success', 'deleted successfully');
    }
}
