<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\MbService;
use Illuminate\Http\Request;
use Symfony\Polyfill\Mbstring\Mbstring;
use App\Http\Requests\StoreMbServiceRequest;
use App\Http\Requests\UpdateMbServiceRequest;
use App\Models\Service;

class MbServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mbservices = MbService::all();
        return view('layouts.dashboard.backend.surveyor.index', compact('mbservices'));
    }
    public function surveyor()
    {
        $properties = Property::paginate(5);
        $services = Service::all();

        return view('surveyor', compact('properties','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.surveyor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMbServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $mbservice = new MbService();
        $mbservice ->primary_contact = $request->primary_contact ;
        $mbservice ->company = $request->company ;
        $mbservice ->first_name = $request->first_name ;
        $mbservice ->sur_name = $request->sur_name ;
        $mbservice ->prefer_contact = $request->prefer_contact ;
        $mbservice ->phone = $request->phone ;
        $mbservice ->email = $request->email ;
        $mbservice ->address = $request->address ;
        $mbservice ->city = $request->city ;
        $mbservice ->country = $request->country ;
        $mbservice ->code = $request->code ;
        $mbservice ->property_type = $request->property_type ;
        $mbservice ->known_size = $request->known_size ;
        $mbservice ->property_size = $request->property_size ;
        $mbservice ->known_survey_copy = $request->known_survey_copy ;
        $mbservice ->survey_property_markers = $request->survey_property_markers;
        $mbservice ->service_required = $request->service_required ;
        $mbservice ->survey_purpose = $request->survey_purpose ;
        $mbservice ->request_stage = $request->request_stage ;
        $mbservice ->date_of_Survey_plate = $request->date_of_Survey_plate ;
        $mbservice ->message = $request->message ;
        $mbservice ->save();




       return back();
    }

    public function form(Request $request)
    {
        // dd($request->all());

        $mbService = MbService::create($request->all());
        // $mbservice = new MbService();
        // $mbservice ->primary_contact = $request->primary_contact ;
        // $mbservice ->company = $request->company ;
        // $mbservice ->first_name = $request->first_name ;
        // $mbservice ->sur_name = $request->sur_name ;
        // $mbservice ->prefer_contact = $request->prefer_contact ;
        // $mbservice ->phone = $request->phone ;
        // $mbservice ->email = $request->email ;
        // $mbservice ->address = $request->address ;
        // $mbservice ->city = $request->city ;
        // $mbservice ->country = $request->country ;
        // $mbservice ->code = $request->code ;
        // $mbservice ->property_type = $request->property_type ;
        // $mbservice ->known_size = $request->known_size ;
        // $mbservice ->property_size = $request->property_size ;
        // $mbservice ->known_survey_copy = $request->known_survey_copy ;
        // $mbservice ->survey_property_markers = $request->survey_property_markers;
        // $mbservice ->service_required = $request->service_required ;
        // $mbservice ->survey_purpose = $request->survey_purpose ;
        // $mbservice ->request_stage = $request->request_stage ;
        // $mbservice ->date_of_Survey_plate = $request->date_of_Survey_plate ;
        // $mbservice ->message = $request->message ;
        // $mbservice ->save();




       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MbService  $mbService
     * @return \Illuminate\Http\Response
     */
    public function show(MbService $mbService)
    {
        $mbservices = MbService::all();
        return view('layouts.dashboard.backend.surveyor.show', compact('mbService', 'mbservices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MbService  $mbService
     * @return \Illuminate\Http\Response
     */
    public function edit(MbService $mbService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMbServiceRequest  $request
     * @param  \App\Models\MbService  $mbService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMbServiceRequest $request, MbService $mbService)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MbService  $mbService
     * @return \Illuminate\Http\Response
     */
    public function destroy(MbService $mbService)
    {
        $mbService->delete();
        return back()->with('success', 'deleted successfully');
    }
}
