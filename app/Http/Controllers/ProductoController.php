<?php

namespace App\Http\Controllers;

use App\Producto;
use JWTAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Exceptions\JWTException;

class ProductoController extends Controller
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

    public function productos()
    {
        $productos = Producto::Select(
            'productos.*',
            'imagenes.img')
        ->Leftjoin('imagenes','imagenes.producto_id','=','productos.id')
        -> get();

        return response()->json(compact('productos'));
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

    public function oneProduct($id)
    {
        $productos = Producto::Select('productos.*','imagenes.img')
        ->Leftjoin('imagenes','imagenes.producto_id','=','productos.id')
        ->where('productos.id','=',$id)
        ->get();

        return response()->json(compact('productos')); 

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

    // public function productos(){

    //     try{
    //         $productos = JWTAuth::parseToken()->authenticate();
    //     $productos = DB::table('wp_posts')
    //     ->select('wp_posts.ID',
    //             'wp_posts.post_author',
    //             'wp_posts.post_type',
    //             'wp_posts.post_title')
    //     ->where('post_type','=','product')
    //     //->orwhere('wp_posts.ID','=',$request->id)
    //     ->get();

    //     return response()->json(compact('productos'));
    //     }catch (JWTException $e){
    //         return response()->json('Token no valido', 400);
    //     }

        
    // }

    // public function oneProduct($id){

    //     try{
    //         $productos = JWTAuth::parseToken()->authenticate();
    //         $productos = DB::table('wp_posts')
    //         ->select('wp_posts.ID',
    //         'wp_posts.post_author',
    //         'wp_posts.post_type',
    //         'wp_posts.post_title')
    
    //         ->where('wp_posts.id','=',$id)
    //         ->get();
    
    //         return response()->json(compact('productos'));
    //     } catch (JWTException $e){
    //         return response()->json('Token no valido', 400);
    //     }
    // }
}
