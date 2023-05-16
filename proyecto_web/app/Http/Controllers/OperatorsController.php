<?php

namespace App\Http\Controllers;

use App\Models\operators;
use Illuminate\Http\Request;

class OperatorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.operators.index')->only('index');
        $this->middleware('can:admin.operators.create')->only('create', 'store');
        $this->middleware('can:admin.operators.edit')->only('edit', 'update');
        $this->middleware('can:admin.operators.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['data_operators'] = operators::paginate();
        return view('operators.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('operators.create');



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
        $data_operators = request() -> except('_token');
        operators::insert($data_operators);

        //return response()->json($data_operators);
        return redirect('operators')->with('mensaje', 'Operario registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\operators  $operators
     * @return \Illuminate\Http\Response
     */
    public function show(operators $operators)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\operators  $operators
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $operator = operators::findOrFail($id);
        return view('operators.edit', compact('operator'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\operators  $operators
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data_operators = request() -> except(['_token','_method']);
        operators::where('id', '=', $id)-> update($data_operators);

        $operator = operators::findOrFail($id);
        return view('operators.edit', compact('operator'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\operators  $operators
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        operators::destroy($id);
        return redirect('operators')->with('mensaje','Operario borrado');
    }
}
