<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destino;
use App\Provincia;

class DestinosController extends Controller
{


    public function inicio()
    {

        return view('inicio');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinos= Destino::paginate(8);

        $vac = compact('destinos');
        return view('/adminDestinos', $vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincias = Provincia::all();

        $vac = compact('provincias');

        return view('/destinoAlta', $vac);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        $reglas = [
            "nombre" => "required|string|min:3",
            "precio" => "required|integer",
            "promocion" => "required|integer",
            "provincia" => "required",
            "imagenPerfil" => "required|file"

        ];
        $mensajes =[
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "integer" => "El campo :attribute debe ser un número",
            "required" => "El campo :attribute es obligatorio",
            "file"=> "El campo no es un archivo" 
        ];
        
        $this->validate($request, $reglas, $mensajes);
        
        $ruta = $request->file("imagenPerfil")->store("public");
        $nombreArchivo = basename($ruta);

        
        $destinoNuevo = new Destino();
       
        $destinoNuevo->nombre_destino = $request["nombre"];
        $destinoNuevo->precio = $request["precio"];
        $destinoNuevo->promocion = $request["promocion"];
        $destinoNuevo->avatar_destino = $nombreArchivo;
        $destinoNuevo->id_provincia = (int)$request["provincia"];
       

        $destinoNuevo->save();
        return redirect("/adminDestinos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $destino = Destino::find($id);
        $provincia= Provincia::find($id);
        $provincias = Provincia::all();
        $vac= compact('destino', 'provincia', 'provincias');

        return view('/destinoMod', $vac);
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

    /** Funcion para pagina DESTINOS  */
    public function pagDestinos()
    {
        $destinos= Destino::paginate(8);

        $vac = compact('destinos');
        return view('/destinos', $vac);
    }
}
