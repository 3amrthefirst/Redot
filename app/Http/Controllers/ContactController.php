<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('website.contact-us');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //
        $rules = [
            'name'=> 'required',
            'mail'=> 'required|email',
            'msg'=> 'required',
        ];
        $msgs = [
            'name.required' => 'الاسم مطلوب',
            'mail.required' => 'البريد الالكتروني مطلوب',
            'mail.email' => 'صيغه البريد الالكتروني غير صحيحه',
            'msg.required' => 'برجاء ادخال رساله',
        ];
        $data = validator()->make($request->all(),$rules,$msgs);

        if($data->fails()){ 
            
            return back()->withInput()->withErrors($data->errors());
        }
        $record = Contact::create($request->all());
        session()->flash('success', 'تمت الاضافة بنجاح');
        return redirect()->route('website.index');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {

    }
    public function show2(Contact $contact){
                //
                $contact = contact::all();

                // load the view and pass the sharks
                return View('admin\msgs')
                    ->with('contacts', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
