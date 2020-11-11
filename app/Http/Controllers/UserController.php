<?php

namespace App\Http\Controllers;

use JWTAuth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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











    
    // public function authenticate(Request $request)
    //  {

         
    //       $credentials = $request->only('email','password');
    //      try {  
    //             if (! $token = JWTAuth::attempt($credentials)) {
    //                 return response()->json(['error' => 'invalid_credentials'], 400);
    //             }
    //         } catch (JWTException $e) {
    //             return response()->json(['error' => 'could_not_create_token'], 500);
    //         }

    //         try{
    //     $usuarios = JWTAuth::parseToken()->authenticate();
    //     $user = DB::table('wp_users')
    //     ->join('users','users.wp_user_id','=','wp_users.ID')
    //     ->select('wp_users.user_login',
    //              'wp_users.user_email',
    //              'wp_users.display_name',
    //              'users.notificaciones',
    //              'users.bloqueado',)
       
    //     ->where('wp_users.user_email','=',$request->email)
    //     ->get();

    //     $detalle_user = DB::table('wp_usermeta')
    //     ->join('wp_users','wp_users.id','=','wp_usermeta.user_id')
    //     ->select('wp_usermeta.meta_key',
    //               'wp_usermeta.meta_value',
    //               'wp_usermeta.user_id',)
    //     ->where('wp_users.user_email','=',$request->email)
    //     ->get();
    //     //$response = compact('token');
    //     //$response['user'] = Auth::user();
    //     return response()->json(compact('token','user','detalle_user'));
    //  }catch (JWTException $e){
    //     return response()->json('Token no valido', 400);
    // }
    // }
}
