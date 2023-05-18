<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;



class ProductosController extends Controller
{
    public function __construct()
    {

        $this->middleware('can:admin.productos.create')->only('create', 'store');
        $this->middleware('can:admin.productos.edit')->only('edit', 'update');
        $this->middleware('can:admin.productos.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda=$request->busqueda;

        $producto = Productos::where('Marca','LIKE','%'.$busqueda.'%')
                 ->orWhere('Descripcion','LIKE','%'.$busqueda.'%')
                        ->latest('id')
                        ->paginate();

        $datos['data_productos'] = $producto;

         return view('productos.index',$datos);
    }

    public function pdf()
    {
        $producto = Productos::paginate();
        
        $datos['data_productos'] = $producto;

        $pdf = PDF::loadView('productos.pdf',$datos);
        //$pdf->loadHTML('productos.pdf');
       

        return $pdf->download();
        

        //  return view('productos.pdf',$datos);
    }
    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');
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
        $data_productos = request() -> except('_token');
        Productos::insert($data_productos);

        //return response()->json($data_operators);
        return redirect('productos')->with('mensaje', 'Producto registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = Productos::findOrFail($id);
        return view('productos.edit', compact('producto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $data_productos = request() -> except(['_token','_method']);
        Productos::where('id', '=', $id)-> update($data_productos);

        $productos = Productos::findOrFail($id);
        return view('productos.edit', compact('productos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Productos::destroy($id);
        return redirect('productos')->with('mensaje','Producto borrado');
    }

    
}


