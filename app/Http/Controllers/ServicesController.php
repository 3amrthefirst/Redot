<?php

namespace App\Http\Controllers;
use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = services::all();

        // load the view and pass the sharks
        return View('admin\orders')
            ->with('services', $services);
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
            'category'=> 'required',
            'price'=> 'required',
            'phone'=> 'required',
            'servicesName'=> 'required',
        ];
        $msgs = [
            'name.required' => 'الاسم مطلوب',
            'mail.required' => 'البريد الالكتروني مطلوب',
            'mail.email' => 'صيغه البريد الالكتروني غير صحيحه',
            'category.required' => 'برجاء ادخال نوع البيزنس',
            'price.required' => 'برجاء ادخال السعر ا',
            'phone.required' => 'برجاء ادخال رقم الهاتف',
            'servicesName.required' => 'برجاء ادخال نوع الخدمه ',
        ];
        $data = validator()->make($request->all(),$rules,$msgs);

        if($data->fails()){ 
            
            return back()->withInput()->withErrors($data->errors());
        }
        $record = Services::create($request->all());
        return redirect()->route('website.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
