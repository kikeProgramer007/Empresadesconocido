<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $empresa=Empresa::all();
        $dato = ['dato' => $empresa];
        echo view('empresa/index',$dato);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view('empresa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresas=new Empresa();
        $empresas->razonsocial=$request->get('razonsocial');
        $empresas->nit=$request->get('nit');
        $empresas->telefono=$request->get('telefono');
        $empresas->save();

        return redirect()->to(route('empresa'));
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
    public function edit( Empresa $empresa)
    {
    
    $dato = ['dato' => $empresa];
        echo view('empresa/edit',$dato);
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        
        $empresa->razonsocial=$request->razonsocial;
        $empresa->nit=$request->nit;
        $empresa->telefono=$request->telefono;
        $empresa->update();

        return redirect()->to(route('empresa'));
            //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Empresa $empresa)
    {
        $empresa->delete();
        return redirect()->to(route('empresa'));
    }
}
