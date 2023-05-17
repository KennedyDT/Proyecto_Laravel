<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;
use App\Models\operators;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        $this->middleware('can:admin.services.create')->only('create', 'store');
        $this->middleware('can:admin.services.edit')->only('edit', 'update');
        $this->middleware('can:admin.services.destroy')->only('destroy');
    }

    public function index()
    {
        if (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Operator')) {
            $data_services = services::with('operator')->get();
        } else {
            $userId = Auth::id();
            $data_services = services::where('user_id', $userId)->with('operator')->get();
        }

        return view('services.index', compact('data_services'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data_users = User::all();
        $data_operators = operators::all();

        return view('services.create', compact('data_users', 'data_operators'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'operator_id' => 'required',
            'price' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]);

        $data = $request->except('_token');

        services::create($data);

        return redirect()->route('services.index')
            ->with('success', 'El servicio ha sido creado exitosamente.');
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
        $services = services::findOrFail($services);

        return view('services.show', compact('services'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = services::findOrFail($id);
        $data_users = User::all();
        $data_operators = operators::all();

        return view('services.edit', compact('service', 'data_users', 'data_operators'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = services::findOrFail($id);

        $service->user_id = $request->user_id;
        $service->description = $request->description;
        $service->operator_id = $request->operator_id;
        $service->price = $request->price;
        $service->date = $request->date;
        $service->status = $request->status;

        $service->save();

        return redirect()->route('services.index')->with('success', 'El servicio ha sido actualizado exitosamente.');
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
