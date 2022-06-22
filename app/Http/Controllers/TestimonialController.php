<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('layouts.dashboard.backend.testimonial.index', compact('testimonials'));
    }
    public function testimonial()
    {
        $testimonials = Testimonial::all();

        return view('layouts.frontend.partials.home.testemonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestimonialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonialRequest $request)
    {
        // dd($request->all());

        $path1 = $request->file('testimonial_image')->store('public/testimonial_image');
        $path2 = $request->file('testimonial_mini_image')->store('public/testimonial_image');

        $testimonial = new Testimonial();
        $testimonial->names = $request->names ;
        $testimonial->text = $request->text ;
        $testimonial->testimonial_image = $path1 ;
        $testimonial->testimonial_mini_image = $path2;
        $testimonial-> save() ;


        return back();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('layouts.dashboard.backend.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('layouts.dashboard.backend.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestimonialRequest  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $testimonial->names = $request->names ;
        $testimonial->text = $request->text ;
        $testimonial->testimonial_image = $request->testimonial_image ;
        $testimonial->testimonial_mini_image = $request-> testimonial_mini_image;
        $testimonial-> save() ;


        return back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return back();
    }
}
