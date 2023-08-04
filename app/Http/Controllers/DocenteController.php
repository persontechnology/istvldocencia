<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Notifications\NotificacionRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;
class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('docentes.index');
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
        $code=random_int(100000,999999);

        $request->validate([
            'email'=>'required|unique:users,email'
        ]);

        $rol=Role::where('name', config('app.ROLE_DOCENTE'))->first();


        $user=new User();
        $user->email=$request->email;
        $user->password=Hash::make($code);
        $user->syncRoles($rol);
        $user->save();
        $data = array(
            'codigo'=>$code,
            'email'=>$user->email
        );
        $user->notify(new NotificacionRegistro($data));
        Session::flash('success','Docente registrado exitosamente');
        return redirect()->route('docentes.index');
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
}
