<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class SignController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //  $usuario = User::get();
       //  return view('user.index')->with('usuario', $usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$usuario =User::where('id',"=",1)->exists();
        //return view('user.sign')->with('usuario',$usuario);
        return view('user.sign');
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
            'id'         => 'required|min:1|max:9|exists:usuario,id',
            'email'      => 'required|min:8|max:50|email|',
            'conf-email' => 'required|min:8|max:50|email|same:email',
            'pass'       => 'required|min:8|',
            'conf-pass'  => 'required|min:8|same:pass'
        ]);
           /* if(){
                $usuario =true;
                return view('user.sign')->with('usuario',$usuario);
            }*/

            $registro             = new User;
            $registro->id         = $request->get('id');
            $registro->email      = $request->get('email');
            $registro->contraseña = hash::make($request->get('pass'));
            $registro->tipo       = 3;
            $registro->telefono   = "000";
            $registro->save();
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
        //
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
}
