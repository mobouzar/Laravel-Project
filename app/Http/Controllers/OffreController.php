<?php

namespace App\Http\Controllers;

use App\Models\offre_Emplois;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offre = offre_Emplois::all();
        return view('offre.index_emplois',['offres'=>$offre]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offre.create_emplois');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'titre'=> 'required',
            'description'=> 'required',
            'etat'=> 'actif' ]);
            $request['etat'] = $request['etat'] ?? 'actif';
       offre_Emplois::create($request->all());
       return redirect()->route('offre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // executer la requetes sql : select * from products where id=$id
        $offre = offre_Emplois::findOrFail($id);
         return view('show_offre', ['offre' => $offre]);
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offre=offre_Emplois::find($id);
        return view('offre.update_emplois',compact('offre','id'));
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
        $offre = offre_Emplois::find($id);
        $offre -> titre = request('titre');
        $offre -> description = request('description');
        $offre -> etat = request('etat');
        $offre->save();
       return redirect()->route('offre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(offre_Emplois $offre)
    {
        $offre ->delete();
        return redirect()->route('offre.index');
    }
}
