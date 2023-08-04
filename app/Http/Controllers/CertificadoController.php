<?php

namespace App\Http\Controllers;

use App\DataTables\CertificadoDataTable;
use App\Models\Certificado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CertificadoDataTable $dataTable)
    {
        return $dataTable->render('certificados.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('certificados.create');
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
        $titulo=new Certificado();
        $titulo->nombre=$request->nombre;
        $titulo->created_at=$request->fecha;
        $titulo->archivo='';
        $titulo->user_id=$user->id;
        $titulo->save();

        if ($request->hasFile('archivo')) {

            $path = Storage::putFileAs(
                'public/certificados', $request->file('archivo'), $titulo->id.'.'.$request->file('archivo')->getClientOriginalExtension()
            );
            $titulo->archivo=$path;
            $titulo->save();
        }


        Session::flash('success','Certificado ingresado');
        return redirect()->route('certificados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificado $certificado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificado $certificado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificado $certificado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($certificado)
    {
        try {
            $ti = Certificado::findOrFail($certificado);
            if($ti->user_id==Auth::id()){
                if($ti->delete()){
                    Storage::delete($ti->archivo);
                }
                Session::flash('success','Certificado eliminado.!');
            }else{
                Session::flash('danger','Certificado no eliminado, porque no te pertenece!');
            }

        } catch (\Throwable $th) {
            Session::flash('info','Certificado no eliminado.!');
        }
        return redirect()->route('certificados.index');
    }
}


