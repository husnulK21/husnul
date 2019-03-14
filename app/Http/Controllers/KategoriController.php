<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kategoriModel;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //mendenifisikan kata kuci
        $cari = $request->cari;
        //mencari data di database
        $kategori = DB::table('kategori')
		->where('nama_kategory','like',"%".$cari."%")
		->paginate();
        //return data ke view
        return view('category.index',['kategori' => $kategori]);
    }
    public function addform(){
        return view('category.addform');
    }
    public function editform($id){
        $data = DB::table('kategori')->where('id',$id)->get();
		return view('category.editform', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        DB::table('kategori')->insert([
            'nama_kategory' => $request->kategori,
            'slug' => $request->slug,
            'taggal_input_data' => $request->tgl
          ]);

         return redirect('category');
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
        DB::table('kategori')->where('id',$id)->update([
            'nama_kategory' => $request->kategori,
            'slug' => $request->slug,
            'taggal_input_data' => $request->tgl
            ]);		
            return redirect('category');
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
        DB::table('kategori')->where('id',$id)->delete();
		return redirect('category');
    }
}
