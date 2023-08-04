<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DatosPersonales extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Auth::user();
        return view('datos-personales.index',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=Auth::user();
        $user->update($request->all());
        Session::flash('success','Datos personales actualizados');
        return redirect()->route('datos-personales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function verArchivo($idUser,$tipo)
    {
        $user=User::findOrFail($idUser);
        return Storage::get($user->foto);
    }
    public function descargarArchivo($idUser,$tipo)
    {
        $user=User::findOrFail($idUser);
        return Storage::download($user->foto);
    }



    public function actualizarIdentificacionFoto(Request $request)
    {

        $user=User::findOrFail($request->id);
        if ($request->hasFile('foto') && $request->tipo==='foto') {
            if(Storage::exists($user->foto??'noexiste.pngx')){
                Storage::delete($user->foto);
            }
            $path = Storage::putFileAs(
                'public/users/fotos', $request->file('foto'), $user->id.'.'.$request->file('foto')->getClientOriginalExtension()
            );
            $user->foto=$path;
            $user->save();
        }


        return json_encode(['success'=>'ok']);
    }
}
