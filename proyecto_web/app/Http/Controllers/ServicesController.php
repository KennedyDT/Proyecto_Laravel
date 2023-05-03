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

        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = users::all();
        $operators = operators::all();
       
        return view('services.create',compact('users','operators'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $data_services = request() -> except('_token');
        operators::insert($data_services);

        //return response()->json($data_services);
        return redirect('services')->with('mensaje', 'Servicio Registrado');*/
        $request->validate([
            'id'=> 'required',
            'type_service' => 'required', 
            'date' =>'required|date',

            'opeartors_id'=> 'required|exists:operators_id',
            'users_id'=> 'required|exists:users_id',

        ]);

        services::create($request->all());

        return redirect()->route('srvices.index')->with('success','servicio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(services $services)
    {
        //
        $services=services::findOrFail($services);

        return view('services.show',compact('services'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(services $services)
    {
        //
        $services =services::findOrFail($services);
        $operators =Operator::all();
        $User =User::all();

        return view('services.edit',compact('services','operators','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(services $services)
    {
        //
    }
}
