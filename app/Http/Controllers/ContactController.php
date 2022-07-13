<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Agent;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Property;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('layouts.dashboard.backend.contact.index', compact('contacts') );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function contact()
    {
        // $properties = Property::paginate(5);
        // $contact = Contact::all();
        // $services = Service::all();

         // dd('ok');
         $teams = Team::all();

         // dd($teams);
         $agents = Agent::paginate(3);
         $testimonials = Testimonial::all();
         $properties = Property::latest()->with(['agent'])->paginate(3);
         $contact = Contact::all();
         $services = Service::all();
         $featuredServices = Service::where('title', 'Accommodation Solution')->orWhere('title', 'Land Acquisition, Perfection of Title and Asset Disposal')
         ->orWhere('title','valuation')->get();



        // return view('contact', compact('properties', 'contact', 'services'));
        return view('contact', compact('teams','services','agents','testimonials', 'properties','contact', 'featuredServices'));
    }

    public function create()
    {
        return view('layouts.dashboard.backend.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);

        // $contact = new Contact();

        // $contact->name = $request->name;
        // $contact->email = $request->email;
        // $contact->phone = $request->phone;
        // $contact->subject = $request->subject;
        // $contact->message = $request->message;

        // $contact->save();

        // Mail::send('contact_email',
        // array(
        //     'name' => $request->get('name'),
        //     'email' => $request->get('email'),
        //     'phone' => $request->get('phone'),
        //     'subject' => $request->get('subject'),
        //     'user_message' => $request->get('message'),
        // ), function($message) use ($request)
        //   {
        //      $message->from($request->email);
        //      $message->to('anointedboy4real80@gmail.com');
        //   });

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('layouts.dashboard.backend.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('layouts.dashboard.backend.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->back();
    }
}
