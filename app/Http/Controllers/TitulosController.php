<?php

namespace App\Http\Controllers;

use App\DataTables\TituloDataTable;
use App\Models\Titulos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TitulosController extends Controller
{
    /**
     * Display a listing of the resource.
     */    public function index(TituloDataTable $dataTable)
    {
        return $dataTable->render('titulos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('titulos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nivle'
        ]);
        $user=Auth::user();
        $titulo=new Titulos();
        $titulo->nivel=$request->nivel;
        $titulo->nombre=$request->nombre;
        $titulo->archivo='';
        $titulo->created_at=$request->fecha;
        $titulo->user_id=$user->id;
        $titulo->save();

        if ($request->hasFile('archivo')) {

            $path = Storage::putFileAs(
                'public/titulos', $request->file('archivo'), $titulo->id.'.'.$request->file('archivo')->getClientOriginalExtension()
            );
            $titulo->archivo=$path;
            $titulo->save();
        }


        Session::flash('success','Título ingresado');
        return redirect()->route('titulos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Titulos $titulos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Titulos $titulos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Titulos $titulos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($titulos)
    {
        try {
            $ti = Titulos::findOrFail($titulos);
            if($ti->user_id==Auth::id()){
                if($ti->delete()){
                    Storage::delete($ti->archivo);
                }
                Session::flash('success','Título eliminado.!');
            }else{
                Session::flash('danger','Título no  eliminado, porque no te pertenece!');
            }

        } catch (\Throwable $th) {
            Session::flash('info','Título no eliminado.!');
        }
        return redirect()->route('titulos.index');
    }
}
